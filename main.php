
<form class="form-horizontal" action="display.php" method="post">
  <div class="row">
    <div class="col-sm-12 margin-bottom-20 margin-top-50">
      <div class="row">
        <div class="col-sm-12 margin-bottom-20 text-center"><img src="images/movie.jpg" height="300px" width="600px" alt="some fault"></div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-1">Time:</div>
            <div class="col-sm-11">
              <select  class="form-control" name='commitment'>
                <option></option>
                <option value="11 A.M">11 A.M</option>
                <option value="2:30 P.M">2:30 P.M</option>
                <option value="6:30 P.M">6:30 P.M</option>
                <option value="10 P.M">10 P.M</option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-1">Date:</div>
            <div class="col-sm-11">
              <input type="date" name='booking' class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 margin-bottom margin-top-50 text-center">
      <input type="submit" class="btn btn-warning">
    </div>
  </div>
</form>
<div class="row">
  <div class="col-sm-12">
    <table class="table">
      <form class="form-horizontal" action="tickets.php" method="post">
        <?php
		$disabled=array();
if(isset($_SESSION['seats'])){
    
	$disabled = $_SESSION['seats'];	



$row=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T');
$j=0;
while($j<count($row)){
for($i=0;$i<20;$i++){
	$seat  = $row[$j].$i;
	if(in_array($seat,$disabled)){
		$check="disabled";
	}else{
		$check="";
	}
	$position='<td class="white2">'."<input type='checkbox' value='".$row[$j].$i."' id='".$row[$j].$i."' name='".$row[$j].$i."' $check>".'<label for="'.$row[$j].$i.'">'."</label>".'</td>';
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
}
if(isset($_SESSION['ticket'])){
echo '<tr>';
echo '<td>Total:</td>';
echo '<td>'.$_SESSION['ticket'].'Rs</td>';
echo '</tr>';	
}
?>
      </form>
    </table>
  </div>
</div>
