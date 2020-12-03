<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->judul_modul);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->judul_modul</td>
            <td>$row->sort_order</td>
            <td>".$this->maluku_lib->kategori_sub_select($row->id_kategori_sub)."</td>
            <td>".get_status_modul($row->status)."</td>
            <!--<td>
                <a href=".base_url()."admin/moduls/config/$row->id_modul class='btn'><i class='icol-pencil'></i> Config</a>
                <a href=".base_url()."admin/moduls/delete/$row->id_modul class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
            </td>-->
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
      <th>Judul Modul</th>
      <th>Sort Order</th>
      <th>Kategori</th>
      <th>Status</th>
      <!--<th width='200px'>Action</th>-->
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

