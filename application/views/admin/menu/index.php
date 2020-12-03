<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> List menus</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/menus/add" class="btn"><i class="icol-add"></i> Add Menu Utama</a>
				<a href="<?php echo base_url()?>admin/menus/add_other" class="btn"><i class="icol-add"></i> Add Menu Other</a>
			</div>
		</div>
	</div>

	<h3>Menu Utama</h3>

	<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Judul</th>
					<th>Sort order</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->judul_menu ?></td>
					<td><?php echo $row->sort_order ?></td>
					<td>
						<div class="btn-group">
							<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
							<a href="<?php echo base_url()?>admin/menus/edit/<?php echo $row->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $row->id_menu?>" class="btn"  OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
					</td>
				</tr>
				<?php $childs = $this->maluku_lib->menu_child($row->id_menu) ?>
				<?php foreach($childs as $child): ?>
				<tr>
					<td></td>
					<td>+ <?php echo $child->judul_menu ?></td>
					<td><?php echo $row->sort_order ?> . <?php echo $child->sort_order ?></td>
					<td>
						<div class="btn-group">
							<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
							<a href="<?php echo base_url()?>admin/menus/edit/<?php echo $child->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $child->id_menu?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
				</td>
				</tr>

					<?php $childs2 = $this->maluku_lib->menu_child($child->id_menu) ?>
					<?php foreach($childs2 as $child2): ?>
					<tr>
						<td></td>
						<td>+ + <?php echo $child2->judul_menu ?></td>
						<td><?php echo $row->sort_order ?> . <?php echo $child->sort_order ?> . <?php echo $child2->sort_order ?></td>
						<td>
							<div class="btn-group">
								<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
								<a href="<?php echo base_url()?>admin/menus/edit/<?php echo $child2->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
								<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $child2->id_menu?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
							</div>
					</td>
					</tr>
					<?php endforeach ?>

				<?php endforeach ?>

			<?php $i++ ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

<h3>Menu Other</h3>

<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Judul</th>
					<th>Sort order</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows2 as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->judul_menu ?></td>
					<td><?php echo $row->sort_order ?></td>
					<td>
						<div class="btn-group">
							<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
							<a href="<?php echo base_url()?>admin/menus/edit_other/<?php echo $row->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $row->id_menu?>" class="btn"  OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
					</td>
				</tr>
				<?php $childs = $this->maluku_lib->menu_child($row->id_menu) ?>
				<?php foreach($childs as $child): ?>
				<tr>
					<td></td>
					<td>+ <?php echo $child->judul_menu ?></td>
					<td><?php echo $row->sort_order ?> . <?php echo $child->sort_order ?></td>
					<td>
						<div class="btn-group">
							<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
							<a href="<?php echo base_url()?>admin/menus/edit_other/<?php echo $child->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $child->id_menu?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
						</div>
				</td>
				</tr>

					<?php $childs2 = $this->maluku_lib->menu_child($child->id_menu) ?>
					<?php foreach($childs2 as $child2): ?>
					<tr>
						<td></td>
						<td>+ + <?php echo $child2->judul_menu ?></td>
						<td><?php echo $row->sort_order ?> . <?php echo $child->sort_order ?> . <?php echo $child2->sort_order ?></td>
						<td>
							<div class="btn-group">
								<!-- <a href="<?php echo base_url()?>admin/menus/show/<?php echo $row->id_menu?>" class="btn"><i class="icol-magnifier"></i> Show</a> -->
								<a href="<?php echo base_url()?>admin/menus/edit/<?php echo $child2->id_menu?>" class="btn"><i class="icol-pencil"></i> Edit</a>
								<a href="<?php echo base_url()?>admin/menus/delete/<?php echo $child2->id_menu?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
							</div>
					</td>
					</tr>
					<?php endforeach ?>

				<?php endforeach ?>

			<?php $i++ ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>

</div>

