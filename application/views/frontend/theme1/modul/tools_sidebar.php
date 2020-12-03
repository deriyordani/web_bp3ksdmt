<!-- Tools -->
<div class="tools yellow">
	<h2 class="head-title">Tools</h2>
	<form>
		<div>
			<label>Simulasi Kredit</label>
			<select>
				<option>Simulasi Kredit</option>
			</select>
			<input type="button" onClick="window.location = '<?php echo base_url()?>modul/simulasi_produk'" class="btn2" >
		</div>
		<!-- <div>
			<label>Alat Bantu dan Formulir</label>
			<select>
				<option>Formulir</option>
			</select>
			<button>GO</button>
		</div> -->
		<div> 
			<label>Lokasi dan Jaringan</label>
			<select>
				<option>ATM</option>
				<!-- <option>Cabang</option>
				<option>Cabang Pembantu</option>
				<option>Kantor Kas</option> -->
			</select>
			<input type="button" onClick="window.location = '<?php echo base_url()?>modul/peta_atm'" class="btn2">
		</div>
	</form>
</div>
<!-- [end] Tools -->