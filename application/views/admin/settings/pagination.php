<?php

$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;


$msg = "";
$i = 1;
foreach ($rows as $row) {
    
    $htmlmsg = htmlentities($row->nama_setting);
    $msg .= "<tr>
        <td> $i </td>
            <td>$row->nama_setting </td>
            <td>
                 <a href=".base_url()."admin/settings/config/$row->key_set/$row->id_table class='btn'><i class='icol-pencil'></i> Config</a>
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
        <th>Setting</th>
        <th width='170px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>

