<style>
.mws-show{
	padding: 10px 10px 10px 10px;
}
</style>
<div class="mws-panel grid_8">
	<div class="mws-panel-body no-padding">
		<div class="mws-panel-header">
			<span>Message</span>
		</div>
		<div class="mws-form-row">
			<div class="mws-form-item">
				<div class="mws-show">
					<?php foreach($rows as $row): ?>
					<p>Name: <?php echo $row->name ?></p>
					<p>Email: <?php echo $row->email ?></p>
					<p>Phone: <?php echo $row->phone ?></p>
					<p>Message: <br />
						<?php echo $row->message ?>
					</p>
					<br />

					<?php echo anchor('admin/contacts/index', 'Back',  'class="btn"'); ?>
				</div>
			</div>
		<?php endforeach ?>
		
	</div>
</div>
</div>

</div>


</div>

