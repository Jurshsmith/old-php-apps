
<div id = "signin-res" style = "background-color: #eee; text-align: center; color: blue;">hello</div><br>
<form class="form-horizontal" role="form" method = "post" action = "dashboard/loginauthenticator.php">

 <div class="form-group">
<label class="control-label col-sm-2" for="name">Email:</label>
    <div class="col-sm-8">
      <input name = "email" type="email" class="form-control" id="email" placeholder="Email here">
    </div>
  </div>

 <div class="form-group">
<label class="control-label col-sm-2" for="name">Password:</label>
    <div class="col-sm-8">
      <input name = "password" type="password" class="form-control" id="password" placeholder="password here">
    </div>
  </div>

<div class="form-group"> 
    <div class="col-sm-offset-6 col-sm-6">
     <button type ="submit" style = "margin-left: -20px" class="btn btn-success">Sign In</button>
    </div>
  </div>

</form>
<?php include('../scripts/authsigninjs.php'); ?>