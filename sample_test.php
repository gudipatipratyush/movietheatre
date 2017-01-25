<html>
<head>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style>
.one {
	margin-top:10px;
	
}
.white2{
	border:1px solid #FFF;
}

.table>thead>tr>th{
	border-top:1px solid #FFF;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12">
<table class="table">
<?php
		$disabled=array();



$row=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T');
$j=0;
while($j<count($row)){
for($i=0;$i<20;$i++){
	$seat  = $row[$j].$i;
	
	$position='<td class="white2">'."<input type='checkbox' value='".$row[$j].$i."' id='".$row[$j].$i."' name='".$row[$j].$i."' >".'<label for="'.$row[$j].$i.'">'."</label>".'</td>';
	if($i%10==1){
	echo $position;
		}elseif($i%10==0){
		if($i==0){
			echo '<tr class="white2"><td class="white2">'.$row[$j].'</td>';
			}elseif($i==10){
			echo $position.'<td class="white2" </td><td class="white2"></td>';			
		}
		else{
		echo $position.'<tr>';
		}
	}else{
echo $position;
	}
}
$j++;
}
echo "<tr>";
echo "<td colspan=24 class='text-center'>".'<input type="submit" class="btn btn-success ">'."</td>";
echo "</tr>";

?>
</table>
</div>
</div>
</div>
</body>
</html>