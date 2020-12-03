<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->jenis_atm);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->jenis_atm</td>
            <td>$row->nama_lokasi</td>
            <td>$row->alamat_lokasi</td>
            <td>$row->keterangan</td>
            <td>
              <a href=".base_url()."admin/peta_atm/edit/$row->id_peta_atm class='btn'><i class='icol-pencil'></i> Edit</a>
              <a href=".base_url()."admin/peta_atm/delete/$row->id_peta_atm class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
      <th>Jenis Tempat</th>
      <th>Lokasi</th>
      <th>Alamat</th>
      <th>Keterangan</th>
      <th width='200px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

