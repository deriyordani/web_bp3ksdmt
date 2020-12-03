<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->judul_page);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->id_page</td>
            <td>$row->judul_page</td>
            <td>
                <a href=".base_url()."admin/pages/edit/$row->id_page class='btn'><i class='icol-pencil'></i> Edit</a>
                <a href=".base_url()."admin/pages/delete/$row->id_page class='btn'  OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
      <th>Code page</th>
      <th>Judul page</th>
      <th width='200px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

