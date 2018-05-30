<?php
ob_start();
function e_hand($eno, $emsg){    
}
set_error_handler("e_hand");
session_start();
date_default_timezone_set("asia/kolkata");
$today=date("Y-m-d");
?>
<link rel="stylesheet" href="vendor/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/equal-height-columns.css">
<link rel="stylesheet" href="vendor/jqui/jquery-ui.min.css">
<link rel="stylesheet" href="style.css">
<script src="vendor/jquery-3.1.0.min.js"></script>
<script src="vendor/bs/js/bootstrap.min.js"></script>
<script src="vendor/jqui/jquery-ui.min.js"></script>
<script src="vendor/jquery.validate.min.js"></script>

<?php require_once 'include/const.php';?>
<?php require_once 'include/db.php';?>
<?php require_once 'include/my_mail.php';?>
<?php require_once 'include/myfun.php';?>

    <div class="mybox1">        
    </div>
<div class="container-fluid">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nb">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">HelpingHands</a>
    </div>
    <div class="collapse navbar-collapse" id="nb">
      <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Home </a></li>
<!--          <li class="active"><a href="index.php">Home <span class="glyphicon glyphicon-option-vertical"></span></a></li>-->
        <li><a href="about.php">About US</a></li>
        <li><a href="contact.php">Contact US</a></li> 
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="shop.php">Help Us <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="user_add.php">Join</a></li>
              <li><a href="donate.php">Donate</a></li>
            </ul>
          </li>
          <li><a href="event.php" >Events</a></li> 
          <?php
          if(is_login()){
          ?>
          <li><a href="users.php" >Users</a></li> 
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="shop.php"><?=$_SESSION["uname"]?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="logout.php">Logout</a></li>
              <li><a href="chpass.php">Change Password</a></li>
            </ul>
          </li>
          <?php
          }
          else {
              echo "<li><a href='login.php'>Login</a></li>";              
          }
          ?>
           
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="container-fluid main">
<script>
    $(document).ready(function(){
//        $(".main").hide("scale");
//        $(".main").show("scale", 1000);
    });
</script>
