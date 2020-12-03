<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->judul_file);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->judul_file</td>
            <td>$row->nama_kategori_sub</td>
            <td>".base_url()."modul/report/download_file/$row->id_file</td>
            <td>
            <div class='btn-group'>
              <a href=".base_url()."admin/files/edit/$row->id_file class='btn'><i class='icol-pencil'></i> Edit</a>
              <a href=".base_url()."admin/files/delete/$row->id_file class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
            </div>
            </td>
        </tr>";
    $i++;
}
?>
<?php

$msg = "
<table class='mws-table'>
<thead>
    <tr>
      <th width='30px'>No</th>
      <th>Title</th>
      <th>Category</th>
      <th>Link Download</th>
      <th width='100px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

