Add news<br />

<?php echo form_open('admin/menu_posisi/create', '') ?>
Title:<br />
<?php echo form_input('title', ''); ?><br />
<?php echo form_textarea('body', ''); ?><br />
<?php echo form_submit('submit', 'Submit'); ?>
<?php form_close(); ?>

<?php echo anchor('admin/menu_posisi/index', 'Back', 'attributs'); ?>