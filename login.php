<?php include_once './header.php'; ?>
<?php
    $msg="";
if(isset($_POST["email"]))
{
    $email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_MAGIC_QUOTES);
    $query = "select * from app_users 
    where email = '$email' 
    and pass = '$pass' and status = 'approved'";
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $_SESSION["uname"]=$row["user_name"];
       $_SESSION["email"]=$row["email"];
       $_SESSION["role"]=$row["role"];
       header("location:index.php");
    }
    else {
        $err="Incorrect User Name or Password!!";
    }
}
    
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
<h3 style="color: red;"><?php echo "$msg";?></h3>
<h1>Login</h1>
<form method="post" id="myform"  class="form-horizontal">
  <div class="form-group  has-feedback">
      <input required type="text" class="form-control" id="email" name='email' placeholder="Email"/>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
  </div>
  <div class="form-group has-feedback">
      <input  required type="password" class="form-control" id="pass" name='pass' placeholder="Password"/>
      <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
  </div> 
  <div class="form-group"> 
      <button type="submit" class="btn btn-primary" style="background-color: #333333">Login</button>
  </div>
  <div class="form-group"> 
      <button type="reset" class="btn btn-primary" style="background-color: #333333">Reset</button>
  </div>
    <div style="color: red; font-weight: bold;" class="form-group">
        <?=$err?>
    </div>
    <div  class="form-group">
        <a style="color: blue;" href="forgot_pass.php">Forgot Password!</a>
    </div>
</form>
</div>
</div>
<?php include_once './footer.php'; ?>

