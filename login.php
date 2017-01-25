<div class="row" ng-hide='sign'>
<div class="col-sm-12">
<h3 class="text-center text-capitalize">login</h3>
</div>
</div>
<form class="form-horizontal" method="post" action="sighin.php">
 <div class="form-group">
      <div class="form-inline">
        <label for="email" class='col-sm-1'>email:</label>
        <input type="email" class="form-control" name="email">
      </div>
    </div>
 <div class="form-group">
      <div class="form-inline">
        <label for="password" class='col-sm-1'>password:</label>
        <input type="password" class="form-control" name="password">
      </div>
    </div>
    <div class="form-tabel col-sm-offset-1">
      <input type="submit" name="submit" class="btn btn-success">
    </div>
    </form>
    
<div  class="margin-bottom-80">
<div class="row">
<div class="col-sm-12"><h3 class="text-center text-capitalize margin-bottom">Register Now</h3></div>
</div>
<div>
<form class="form-horizontal" action="register.php" method="post">
 <div class="form-group">
      <div class="form-inline">
        <label for="email" class='col-sm-1'>Name:</label>
        <input type="text" class="form-control" name="name">
      </div>
    </div>
 <div class="form-group">
      <div class="form-inline">
        <label for="email" class='col-sm-1'>email:</label>
        <input type="email" class="form-control" name="email">
      </div>
    </div>
     <div class="form-group">
      <div class="form-inline">
        <label for="password" class='col-sm-1'>password:</label>
        <input type="password" class="form-control" name="password">
      </div>
    </div>

    <div class="form-tabel col-sm-offset-1">
      <input type="submit" name="submit" class="btn btn-success" >
    </div>
</form>
</div>
