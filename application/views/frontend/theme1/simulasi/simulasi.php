<div id="simulasi_produk" class="content">
	<h1 class="title"><?php echo $text_title; ?></h1>

	<form id="simulasikreditflat" name="simulasikreditflat" method="post">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableform" style="width:70%">
			<tbody>
				<tr>
					<td>Type of Calculation</td>
					<td><select name="kategori" id="formcategory" class="valid">
						<option value="1" <?php if(isset($_POST['calculate']) && $_POST['kategori']==1) echo 'selected="selected"'; ?>>Flat</option>
						<option value="2" <?php if(isset($_POST['calculate']) && $_POST['kategori']==2) echo 'selected="selected"'; ?>>Efektif</option>
						<option value="3" <?php if(isset($_POST['calculate']) && $_POST['kategori']==3) echo 'selected="selected"'; ?>>Anuitas</option>
						<option value="4" <?php if(isset($_POST['calculate']) && $_POST['kategori']==4) echo 'selected="selected"'; ?>>Baki Debet Menurun</option>
					</select></td>
				</tr>
				<tr>
					<td>Ceiling (Rp.)</td>
					<td><input type="text" name="plafond" id="formplafond" class="w100 valid" value="<?php if(isset($_POST['calculate'])) echo $_POST['plafond']; ?>"></td>
					
				</tr>
				<tr>
					<td>Period (month)</td>
					<td width="25%"><input name="jangkabulan" type="text" id="formjangkawaktu" class="w100" value="<?php if(isset($_POST['calculate'])) echo $_POST['jangkabulan']; ?>"></td>
					
				</tr>
				<tr>
					<td>Interest (%/month)</td>
					<td><input name="bungabulan" type="text" id="formbungabulan" class="w100" value="<?php if(isset($_POST['calculate'])) echo $_POST['bungabulan']; else echo $bunga_db; ?>"></td>
					
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="calculate" id="calculate" value="Calculate" class="btn"></td>
				</tr>
			</tbody>
		</table>
	</form>

	<?php

	if(isset($_POST['calculate'])){
		$plafond = $_POST['plafond'];
		$jangkabulan = $_POST['jangkabulan'];
		$bungabulan = $_POST['bungabulan'];
		$kategori = $_POST['kategori'];
	?>
	<br><br><br>
	<table width="100%" border="1" cellspacing="0" cellpadding="0" class="tableresult">
		<thead>
	  	<tr>
	    	<th rowspan="2">Bulan</th>
	    	<th colspan="2">Angsuran</th>
	    	<th rowspan="2">Total Angsuran</th>
	    	<th rowspan="2">Out Standing</th>
	  	</tr>
	  	<tr>
	    	<th>Pokok</th>
	    	<th>Bunga</th>
	  	</tr>
	  	</thead>
	  	<tbody>
	  	<?php

	  		$plafond_dum = $plafond;
	  		$plafond_dum_tahun = $plafond;
	  		$bunga_dum = 0;
	  		$pokok_dum = 0;
	  		$angsuran_dum = 0;

	  		for($i=1;$i<=$jangkabulan;$i++){

	  			if($kategori == 1){
		  			$pokok = round($plafond / $jangkabulan);
			  		$bunga = round((($plafond*$bungabulan)/100)/12);
			  		$angsuran = $pokok + $bunga;

			  		if($i == $jangkabulan) $outstanding=0; else $outstanding = round($plafond-($plafond/$jangkabulan*$i));
		  		}
		  		else if($kategori == 2){
		  			
			  		$bunga = round($plafond_dum*$bungabulan/100/12);
			  		$angsuran = round(($plafond*($bungabulan/100/12))/(1-1/pow((1+$bungabulan/100/12),$jangkabulan)));
			  		$pokok = $angsuran - $bunga;
			  		if($i == $jangkabulan) $outstanding=0; else $outstanding = $plafond_dum-$pokok;

			  		$bunga_dum = $bunga_dum + $bunga;
		  		}
		  		else if($kategori == 3){

		  			$jangkatahun = round($jangkabulan/12);
		  			$anuitas = $bungabulan/100*pow((1+($bungabulan/100)),$jangkatahun) / (pow((1+($bungabulan/100)),$jangkatahun)-1);
		  			$angsuran = round($plafond*$anuitas/12);
		  			$bunga = round($plafond_dum_tahun*$bungabulan/100/12);
		  			$pokok = $angsuran - $bunga;
		  			if($i == $jangkabulan) $outstanding=0; else $outstanding = $plafond_dum-$pokok;

		  			$bunga_dum = $bunga_dum + $bunga;
		  			$pokok_dum = $pokok_dum + $pokok;
		  			$angsuran_dum = $angsuran_dum + $angsuran;

		  		}
		  		else if($kategori == 4){
		  			$pokok = round($plafond / $jangkabulan);
			  		$bunga = round((($plafond_dum*$bungabulan)/100)/12);
			  		$angsuran = $pokok + $bunga;
			  		if($i == $jangkabulan) $outstanding=0; else $outstanding = round($plafond-($plafond/$jangkabulan*$i));

			  		$bunga_dum = $bunga_dum + $bunga;
		  		}

	  			echo "<tr>
	  			<td>$i</td>
	  			<td>".number_format($pokok)."</td>
	  			<td>".number_format($bunga)."</td>
	  			<td>".number_format($angsuran)."</td>
	  			<td>".number_format($outstanding)."</td>
	  			</tr>";

	  			if($i%12 == 0){

	  				if($kategori == 1){
		  				if($i == $jangkabulan) $pokok_sum=$plafond; else $pokok_sum = round($plafond / $jangkabulan * $i);
		  				$bunga_sum = round((($plafond*$bungabulan)/100)/12*$i);
		  				$angsuran_sum = $pokok_sum + $bunga_sum;
	  				}
	  				else if($kategori == 2){
		  				$bunga_sum = $bunga_dum;
		  				$angsuran_sum = round((($plafond*($bungabulan/100/12))/(1-1/pow((1+$bungabulan/100/12),$jangkabulan)))*$i);
		  				if($i == $jangkabulan) $pokok_sum=$plafond; else $pokok_sum = $angsuran_sum - $bunga_sum;
	  				}
	  				else if($kategori == 3){
		  				$bunga_sum = $bunga_dum;
		  				$angsuran_sum = $angsuran_dum;
		  				if($i == $jangkabulan) $pokok_sum=$plafond; else $pokok_sum = $pokok_dum;
	  				}
	  				else if($kategori == 4){
		  				if($i == $jangkabulan) $pokok_sum=$plafond; else $pokok_sum = round($plafond / $jangkabulan * $i);
		  				$bunga_sum = $bunga_dum;
		  				$angsuran_sum = $pokok_sum + $bunga_sum;
	  				}

	  				echo "<tr bgcolor='#ccc'>
		  			<td></td>
		  			<td><strong>".number_format($pokok_sum)."</strong></td>
		  			<td><strong>".number_format($bunga_sum)."</strong></td>
		  			<td><strong>".number_format($angsuran_sum)."</strong></td>
		  			<td></td>
		  			</tr>";
	  			}

	  		$plafond_dum = $plafond_dum-$pokok;
	  		if($i%12 == 0){
				$plafond_dum_tahun = $plafond_dum;
			}
	  		}
	  	?>
	  	</tbody>
	</table>
	<?php
	}
	?>

</div>