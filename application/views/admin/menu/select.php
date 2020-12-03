
<label class="mws-form-label">
	<?php
		if($jenis == 'link'){
			echo "Link";
		} else if($jenis == 'page_language') {
			echo "List Page";
		} else if($jenis == 'modul') {
			echo "List Modul";
		}
		
	?>
</label>
<div class="mws-form-item">
	<?php
		if($jenis == 'link'){
			echo form_input('link_url','','class="small"');
		} else if($jenis == 'page_language') {
			echo form_dropdown('id_jenis', $list_jenis, '', 'class="small"');
		} else if($jenis == 'modul') {
			echo form_dropdown('id_jenis', $list_jenis, '', 'class="small"');
		}
		
	?><br />
</div>

