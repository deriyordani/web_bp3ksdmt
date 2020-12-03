<link href="<?php echo base_url() ?>css/pagination.css" rel="stylesheet" />
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> Setting</i></span>
	</div>
	<div class="mws-panel-toolbar">
	</div>
	<div class="mws-panel-body no-padding">
		<div id="content">
			<?php
			$msg = "";
			$i = 1;
			
			foreach ($rows as $row) {
    
    			$htmlmsg = htmlentities($row->nama_setting);
    			$msg .= "<tr>
        				<td> $i </td>
            				<td>$row->nama_setting </td>
            				<td>
                 				<a href=".base_url()."admin/settings/config/$row->key_set/$row->id_table class='btn'><i class='icol-pencil'></i> Config</a>
            				</td>
        		</tr>";
   			$i++;
			}


			echo "
			<table class='mws-table'>
				<thead>
    				<tr>
        				<th width='30px'>No</th>
        				<th>Setting</th>
        				<th width='170px'>Action</th>
   				 </tr>
				</thead>   
				" . $msg . "
			</table>";
			?>
		</div>
		<br />
	</div>
</div>