<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->judul_topik_polls);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->judul_topik_polls</td>
            <td>
            <div class='btn-group'>
              <a href=".base_url()."admin/polls/edit/$row->id_topik_polls class='btn'><i class='icol-pencil'></i> Edit</a>
              <a href=".base_url()."admin/polls/delete/$row->id_topik_polls class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
      <th>Judul topik polls</th>
      <th width='100px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

