<div class="row">
<div class="col-sm-12 margin-top-50 text-center"><h3>Booking History</h3></div>
</div>
<div class="row">
<div class="col-sm-12">
<table class="table table-bordered">
<tr>
<td>Show Date</td>
<td>Seat Booked</td>
<td>Show Time</td>
</tr>
<?php
echo '<tr>';
require 'easy.php';

$obj= new events();
$sql='select * from ticket where name="'.$_SESSION['id'].'"';
$records=$obj->selectquery($sql);
for($i=0;$i<count($records);$i++){
	echo '<td>'.$records[$i]['date'].'</td>';
	echo '<td>'.$records[$i]['seat'].'</td>';
	echo '<td>'.$records[$i]['booked'].'</td></tr>';
}
?>
</table>
</div>
</div>
<div class="row">
<div class="col-sm-12 margin-bottom"></div>
</div>