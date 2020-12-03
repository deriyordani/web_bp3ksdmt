<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->name);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->name</td>
            <td>".get_status_comment($row->status)."</td>
            <td>
            <div class='btn-group'>
              <a href=".base_url()."admin/comments/show/$row->id_comment class='btn'><i class='icol-magnifier'></i> Show</a>
              <a href=".base_url()."admin/comments/accept/$row->id_comment class='btn'><i class='icol-accept'></i> Accept</a>
              <a href=".base_url()."admin/comments/reject/$row->id_comment class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Reject</a>
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
      <th>Comments From</th>
      <th>Status</th>
      <th width='200px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

