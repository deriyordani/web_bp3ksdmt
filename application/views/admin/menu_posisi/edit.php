
<?php foreach($rows as $row): ?>
	<?php echo form_open('admin/menu_posisi/update', '') ?>
		Permission name:<br />
		<?php echo form_input('title', $row->title); ?><br />
		<?php echo form_textarea('body', $row->body); ?><br />
		<?php echo form_hidden('id_news', $row->id_news); ?>
		<?php echo form_submit('submit', 'Submit'); ?>
	<?php form_close(); ?>
<?php endforeach ?>

<?php echo anchor('admin/menu_posisi/index', 'Back', 'attributs'); ?>