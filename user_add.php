<?php include_once './header.php'; ?>
<?php 
if(isset($_POST["fname"])){
    if(empty ($_POST["fname"])){
        $err = "Name is req!!";
    }
    else if(empty ($_POST["email"])){
        $err = "E Mail is req!!";
    }
    else if(is_exist($_POST["email"])){
        $err = "E Mail already registered! Contact Admin!";
    }    
    else if(empty ($_POST["phone"])){
        $err = "Phone is req!!";
    }
    else if(!check_phone_no($_POST["phone"])){
        $err = "Phone is incorrect!!";
    }
    else {
        $query = "INSERT INTO `app_users` 
    (`user_name`, `email`, `pass`, `phone_no`, 
    `sec_q`, `sec_a`, `role`, `status`) 
    VALUES ('$_POST[fname]', '$_POST[email]', 'kuch', '$_POST[phone]', 
    'kuch', 'kuch', '$_POST[role]', 'new');";
     $r =run_sql($query);    
     
//         $msg="Name : $_POST[fname]
//          \nEMail : $_POST[email]  
//          \nPhone : $_POST[phone]  
//          \nRole : $_POST[role]  
//          ";
//    mail_it(ADMIN_EMAIL, "New user joined Helping Hands!", $msg, null);
//    mail_it($_POST["email"], "Thanks for joining!", "Thanks..." , null);

     
     redirect("index.php?msg=1");
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
                                <input required id="fname" name="fname" type="text"  placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="phone" name="phone" type="tel"  placeholder="Phone" class="form-control">
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
      <button type="submit" class="btn btn-primary" >Add</button>
  </div>
  <div class="form-group"> 
      <a class="btn btn-primary" href="doc_add.php">Reset</a>
  </div>    
</form>
        </div>
</div>    

<?php include_once './footer.php'; ?>
