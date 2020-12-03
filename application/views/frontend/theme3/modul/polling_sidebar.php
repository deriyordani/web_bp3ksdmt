<!-- Polling -->
<div class="box-300 floated-left">
	<div class="title-blok"><h2 class="head-title">Polling</h2></div>
	<div class="polling">
	<?php
	if(!isset($_POST['poll']) || !isset($_POST['pollid'])){
		$language_id = $this->maluku_lib->language();
		$query = $this->db->query("SELECT tp.id_topik_polls, tpl.judul_topik_polls FROM topik_polls tp JOIN topik_polls_language tpl ON tp.id_topik_polls=tpl.id_topik_polls WHERE tp.status=1 AND tpl.id_language='$language_id' ORDER BY tp.id_topik_polls DESC LIMIT 1");
		foreach($query->result() as $row){
		//display question
			echo "<p class=\"pollques\" >".$row->judul_topik_polls."</p>";
			$poll_id=$row->id_topik_polls;
		}
		if(isset($_GET["result"])==1 || isset($_COOKIE["voted".$poll_id])=='yes'){
		//if already voted or asked for result
			showresults($poll_id,$language_id);
			//exit;
		}
		else{
		//display options with radio buttons
			$language_id = $this->maluku_lib->language();
			$query = $this->db->query("SELECT pp.id_pilihan_polls, ppl.judul_pilihan_polls FROM pilihan_polls pp JOIN pilihan_polls_language ppl ON pp.id_pilihan_polls=ppl.id_pilihan_polls WHERE pp.id_topik_polls=$poll_id AND ppl.id_language='$language_id'");
			if($query){
				echo '<form class="polling-form" method="post" id="pollform" action="'.$_SERVER['PHP_SELF'].'" >';
				echo '<input type="hidden" name="pollid" value="'.$poll_id.'" />';
				foreach($query->result() as $row){
					echo '<input type="radio" name="poll" value="'.$row->id_pilihan_polls.'" id="option-'.$row->id_pilihan_polls.'" class="radio-btn" />
					<label for="option-'.$row->id_pilihan_polls.'" >'.$row->judul_pilihan_polls.'</label><br/>';
				}
				echo '<div class="btn-poll"><input type="submit" value="Vote" class="btn floated-left mr-20" />';
				echo '<a href="'.base_url().'modul/polling_sidebar?result=1" id="viewresult" class="btn floated-left">View result</a></div></form>';
			}
		}
	}
	else{
		if(isset($_COOKIE["voted".$_POST['pollid']])!='yes'){

		//Check if selected option value is there in database?
			$query=mysql_query("SELECT * FROM pilihan_polls WHERE id_pilihan_polls='".intval($_POST["poll"])."'");
			if(mysql_num_rows($query)){
				$query="INSERT INTO pilihan_topik_polls(id_pilihan_polls, ip) VALUES('".$_POST["poll"]."', '".$_SERVER['REMOTE_ADDR']."')";
				if(mysql_query($query))
				{
				//Vote added to database
					setcookie("voted".$_POST['pollid'], 'yes', time()+86400*300);				
				}
				else
					echo "There was some error processing the query: ".mysql_error();
			}
		}
		$language_id = $this->maluku_lib->language();
		showresults(intval($_POST['pollid']),$language_id);
	}


	function showresults($poll_id,$language_id){
		$query=mysql_query("SELECT COUNT(*) as totalvotes FROM pilihan_topik_polls WHERE id_pilihan_polls IN(SELECT id_pilihan_polls FROM pilihan_polls WHERE id_topik_polls='$poll_id')");
		while($row=mysql_fetch_array($query)){
			$total=$row['totalvotes'];
		}
		$query=mysql_query("SELECT pp.id_pilihan_polls, ppl.judul_pilihan_polls, COUNT(*) as votes FROM pilihan_topik_polls ptp JOIN pilihan_polls pp ON ptp.id_pilihan_polls=pp.id_pilihan_polls JOIN pilihan_polls_language ppl ON pp.id_pilihan_polls=ppl.id_pilihan_polls WHERE ptp.id_pilihan_polls IN(SELECT id_pilihan_polls FROM pilihan_polls WHERE id_topik_polls='$poll_id') AND ppl.id_language='$language_id' GROUP BY ptp.id_pilihan_polls");
		while($row=mysql_fetch_array($query)){
			$percent=round(($row['votes']*100)/$total);
			echo '<div class="option" ><p>'.$row['judul_pilihan_polls'].' (<em>'.$percent.'%, '.$row['votes'].' votes</em>)</p>';
			echo '<div class="bar ';
			if(isset($_POST['poll'])==$row['id_pilihan_polls']) echo ' yourvote';
			echo '" style="width: '.$percent.'%; " ></div></div>';
		}
		echo '<p>Total Votes: '.$total.'</p>';
	}

	?>
</div>
</div>
<!-- [end] Polling -->