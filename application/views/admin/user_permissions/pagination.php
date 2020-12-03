<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->page_user_permission);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->page_user_permission </td>
            <td>
                 <a href=".base_url()."admin/user_permissions/edit/$row->id_user_permission class='btn'><i class='icol-pencil'></i> Edit</a>
                 <a href=".base_url()."admin/user_permissions/delete/$row->id_user_permission class='btn'  OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
        <th>Access</th>
        <th width='170px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

