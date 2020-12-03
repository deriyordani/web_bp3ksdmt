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
            <td>$row->email</td>
            <td>".date('d/m/Y H:i', strtotime($row->date_update))."</td>
            <td>
            <div class='btn-group'>
              <a href=".base_url()."admin/contacts/show/$row->id_contact class='btn'><i class='icol-magnifier'></i> Show</a>
              <a href=".base_url()."admin/contacts/delete/$row->id_contact class='btn' OnClick=\"return confirm('Are you sure?');\"><i class='icol-cross'></i> Delete</a>
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
      <th>Name</th>
      <th>Email</th>
      <th>Date Create</th>
      <th width='100px'>Action</th>
    </tr>
</thead>   
" . $msg . "
</table>
"; // Content for Data
//load file pagination

include('pg.php');
?>
