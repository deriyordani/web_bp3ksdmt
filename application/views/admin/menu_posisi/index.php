List Menu Posisi<br />
<?php 
	echo anchor('admin/menu_posisi/add', 'add', 'attributs');
?>
<table>
<tr>
	<td>No</td>
	<td>Title</td>
	<td colspan="2">Action</td>
	</tr>
<?php $i = 1 ?>
<?php foreach($rows as $row): ?>
 <tr>
	<td><?php echo $i ?></td>
	<td><?php echo $row->nama_posisi ?></td>
<!-- 	<td><?php echo anchor('admin/menu_posisi/show/'.$row->id_news, 'show', ''); ?> |</td> -->
	<td><?php echo anchor('admin/menu_posisi/edit/'.$row->id_news, 'edit', ''); ?> |</td>
	<td><?php echo anchor('admin/menu_posisi/delete/'.$row->id_news, 'delete', ''); ?></ |td>
</tr>
<?php $i++ ?>
<?php endforeach ?>


</table>