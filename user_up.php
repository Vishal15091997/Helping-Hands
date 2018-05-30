<?php include_once './header.php'; ?>
<?php 
if(!isset($_REQUEST["id"])){
    redirect("event.php");
}
$query="select * from app_users where id = $_REQUEST[id]";
$r = run_sql($query);
$orow = mysqli_fetch_array($r);

if(isset($_POST["fname"])){
    if(empty ($_POST["fname"])){
        $err = "Name is req!!";
    }
    else if(empty ($_POST["email"])){
        $err = "E Mail is req!!";
    }
    else if(empty ($_POST["phone"])){
        $err = "Phone is req!!";
    }
    else if(!check_phone_no($_POST["phone"])){
        $err = "Phone is incorrect!!";
    }
    else {
        $query = "update `app_users` set 
    `user_name`='$_POST[fname]', `email`='$_POST[email]', 
       `phone_no`='$_POST[phone]', `role` = '$_POST[role]'
           where id = $_REQUEST[id]
        ";
     $r =run_sql($query);    
     redirect("users.php?msg=3");
    }
}
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
        <h1>Join</h1>
    <form method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="fname" name="fname" type="text" value="<?=$orow["user_name"]?>"  placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="email" name="email"  value="<?=$orow["email"]?>" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="phone" name="phone" type="tel"   value="<?=$orow["phone_no"]?>" placeholder="Phone" class="form-control">
                            </div>
                        </div>        
                        <div class="form-group">
                            <span class="col-sm-1  text-center"></span>
                            <div class="col-sm-10">
                                <select class="form-control" required id="role" name="role">
                                    <option>Sponsor</option>
                                    <option>Volunteer</option>
                                    <option>Both</option>
                                </select>
                            </div>
                        </div>        
        
    <div  class="form-group">
       <h4 style="color: red;"><?php echo $err;?></h4>
    </div>    
  <div class="form-group"> 
      <button type="submit" class="btn btn-primary" >Update</button>
  </div>
  <div class="form-group"> 
      <a class="btn btn-primary" href="doc_add.php">Reset</a>
  </div>    
</form>
        </div>
</div>    

<?php include_once './footer.php'; ?>
