<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> List Categories</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/categories/add" class="btn"><i class="icol-add"></i> Add Parrent</a>
				<a href="<?php echo base_url()?>admin/categories/add_child" class="btn"><i class="icol-add"></i> Add Child</a>
			</div>
		</div>
	</div>
	<div class="mws-panel-body no-padding">
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Nama kategori</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->nama_kategori ?></td>
					<td>
						<div class="btn-group">
							<?php if($row->id_language != 0){ ?>
							<a href="<?php echo base_url()?>admin/categories/edit/<?php echo $row->id_kategori?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/categories/delete/<?php echo $row->id_kategori?>" class="btn" OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
							<?php } ?>
						</div>
					</td>
				</tr>
				<?php $childs = $this->maluku_lib->menu_child_category($row->id_kategori) ?>
				<?php foreach($childs as $child): ?>
				<tr>
					<td></td>
					<td>+ <?php echo $child->nama_kategori_sub ?></td>
					<td>
						<div class="btn-group">
							<?php if($child->id_language != 0){ ?>
							<a href="<?php echo base_url()?>admin/categories/edit_child/<?php echo $child->id_kategori_sub?>" class="btn"><i class="icol-pencil"></i> Edit</a>
							<a href="<?php echo base_url()?>admin/categories/delete_child/<?php echo $child->id_kategori_sub?>" class="btn"  OnClick="return confirm('Are you sure?');"><i class="icol-cross"></i> Delete</a>
							<?php } ?>
						</div>
				</td>
				</tr>
				<?php endforeach ?>
			<?php $i++ ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>

