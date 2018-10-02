
<br><br>
<div id = "form-res" style = "padding: 50px;margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>
<form class="form-horizontal" role="form">

  <div class="form-group">
<label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" placeholder="Enter your name">
    </div>
  </div>
 
    <div  id = "name-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

   
  <div class="form-group">
<label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="email" placeholder="Email here">
    </div>
  </div>
    <div  id = "email-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

  <div class="form-group">
<label class="control-label col-sm-2" for="name">Account name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="acctname" placeholder="Account Name here">
    </div>
  </div>
    <div  id = "acctname-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>
 
  <div class="form-group">
<label class="control-label col-sm-2" for="name">Bank name:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="bankname" placeholder="bank Name here">
    </div>
  </div>
    <div  id = "bankname-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

   <div class="form-group">
<label class="control-label col-sm-2" for="name">Account no:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="acctno" placeholder="Account No here">
    </div>
  </div>
    <div  id = "acctno-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

   <div class="form-group">
<label class="control-label col-sm-2" for="name">Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="password" placeholder="password here">
    </div>
  </div>
    <div  id = "password-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

 <div class="form-group">
<label class="control-label col-sm-2" for="name">Confirm Password:</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="cpassword" placeholder="confirm password here">
    </div>
  </div>
    <div  id = "cpassword-res" style = "margin-left: 15%;width: 70%;margin-bottom: 20px;background-color: #eee;text-align: center;color:blue;"></div>

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-6 col-sm-6">
      <button id="sign-up" class="btn btn-success">Sign Up</button>
    </div>
  </div>
</form>
<?php include('../scripts/signup_existingjs.php'); ?>
<?php include('../scripts/authpasswordjs.php'); ?>
<?php include('../scripts/authformjs.php'); ?>