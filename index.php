<?php
session_start();
?>
<html>
<head>
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style>
.padding190 li{
	padding-left:190px;
	
}
.gem{
	width:10px;
}
.box{
	width:10px;
	border:1px solid #FFF;
}
.box1{
	width:60px;
	border:1px solid #FFF;
}
input[type="checkbox"] {
  display: none;
}
label {
  cursor: pointer;
}
input[type="checkbox"] + label:before {
  background:green;
  border: 1px solid #7f83a2;
  content: "\00a0";
  display: inline-block;
  font: 16px/1em sans-serif;
  height: 16px;
  margin: 0 .25em 0 0;
  padding: 0;  
  width: 16px;
}
input[type="checkbox"]:checked + label:before {
  background:red;
  color: #666;
  content: "\2713";
  text-align: center;
}
input[type="checkbox"]:checked + label:after {
  font-weight: bold;
}
input[type="checkbox"]:disabled + label:before{
	background:orange;
}
.margin-left{
	margin-left:300px;
}
.border-bottom{
	border:2px solid  #FFF;
}
.border-up{
	border-top:1px solid #FFF;
}
.margin-bottom{
	margin-bottom:60px;
}
.margin-bottom-20{
	margin-bottom:20px;
}
.margin-bottom-70{
	margin-bottom:180px;
}
.margin-bottom-80{
	margin-bottom:135px;
}
.margin-top-50{
	margin-top:50px;
}
.margin-bottom-1{
	margin-bottom:10px;
}
.border-right{
	border-right:2px solid #000;
	height:100px;
}
.white2{
	border:1px solid #FFF;
}


</style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <h1 class="text-center text-capitalize">saradha theatre</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <ul class="list-inline padding190">
        <li><a href=""><i class="fa fa-user"></i> Home</a></li>
        <li><span><a href="" ><i class="fa fa-star"></i>history</a></span></li>
        <li><a href=""><i class="fa fa-shopping-cart"></i> contact us</a></li>
        <li><span'><a href="" ><i class="fa fa-crosshairs"></i> login</a></span><span><a>logout</a></span></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
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
              <input type="date" name='booking'>
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
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
      <form class="form-horizontal" action="tickets.php" method="post">
        <?php
		$disabled=array();
if(isset($_SESSION['seats'])){
	$disabled = $_SESSION['seats'];	



$row=array('A','B','C','D');
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
?>
</form>
      </table>
    </div>
  </div>

</div>
</div>
<div class="row">
  <div class="col-sm-12 margin-top-50">
    <div class="row">
      <div class="col-sm-4 border-right"><u><b>About Us</b></u>
        <p>bcjsksdbckdbshkbdskvbsdbsjkb
          jvdksksbbvkkbsdkbdkbsvbkbvsddsbsknllndskdsndsn</p>
      </div>
      <div class="col-sm-4 border-right"><u><b>Address</b></u>
        <p>29, State Bank Rd, Gopalapuram, Coimbatore, Tamil Nadu 641018</p>
      </div>
      <div class="col-sm-4"><u><b>ContactUs</b></u>
        <p>Phone: 0422 230 0230</p>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>