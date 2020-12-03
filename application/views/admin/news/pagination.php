<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->judul_news);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->judul_news</td>
            <td>$row->nama_kategori_sub</td>
            <td>".get_status_modul($row->status)."</td>
            <td>
                <a href=".base_url()."admin/news/show/$row->id_news class='btn'><i class='icol-magnifier'></i> Show</a>
                <a href=".base_url()."admin/news/edit/$row->id_news class='btn'><i class='icol-pencil'></i> Edit</a>
                <a href=".base_url()."admin/news/delete/$row->id_news class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
      <th>Judul News</th>
      <th>Kategori</th>
      <th>Status</th>
      <th width='240px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

