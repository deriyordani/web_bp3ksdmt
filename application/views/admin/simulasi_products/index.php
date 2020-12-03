<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-newspaper"> Simulasi Products</i></span>
	</div>
	<div class="mws-panel-toolbar">
		<!-- <div class="btn-toolbar">
			<div class="btn-group">
				<a href="<?php echo base_url()?>admin/peta_atm/add" class="btn"><i class="icol-add"></i> Add</a>
			</div>
		</div> -->
	</div>
		<table class="mws-table">
			<thead>
				<tr>
					<th width="30px">No</th>
					<th>Bunga</th>
					<th width="100px">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1 ?>
				<?php foreach($rows as $row): ?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row->bunga ?></td>
					<td>
						<div class="btn-group">
							<a href="<?php echo base_url()?>admin/simulasi_products/edit/<?php echo $row->id_simulasi_produk?>" class="btn"><i class="icol-pencil"></i> Edit</a>
						</div>
					</td>
				</tr>
			<?php $i++ ?>
			<?php endforeach ?>
		</tbody>
	</table>
</div>
</div>

