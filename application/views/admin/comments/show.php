<style>
.mws-show{
	padding: 10px 10px 10px 10px;
}
</style>
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> Show Comment</i></span>
	</div>
	<div class="mws-panel-body no-padding">
		<div class="mws-show">
			<?php foreach($rows as $row): ?>
			Name : <?php echo $row->name ?><br />
			Email : <?php echo $row->email ?><br />
			Website :<?php echo $row->url ?><br />
			Comments: <br />
			<?php echo $row->content ?><br />
		<?php endforeach ?>
		<br />

		<?php echo anchor('admin/comments/index', 'Back', 'class="btn"'); ?>
	</div>

</div>
</div>