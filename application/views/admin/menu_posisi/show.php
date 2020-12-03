Show News:<br />

<?php foreach($rows as $row): ?>
	<?php echo form_open('admin/news/update', '') ?>
		<?php echo $row->title ?><br />
		<?php echo $row->body ?><br />
		<?php echo form_submit('submit', 'Submit'); ?>
	<?php form_close(); ?>
<?php endforeach ?>

<?php echo anchor('admin/news/index', 'Back', 'attributs'); ?>