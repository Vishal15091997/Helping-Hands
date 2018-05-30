<?php include_once './header.php'; ?>
<?php 
check_admin();
if(!isset($_REQUEST["id"])){
    redirect("event.php");
}
$query="select * from event where id = $_REQUEST[id]";
$r = run_sql($query);
$orow = mysqli_fetch_array($r);
if(isset($_POST["e_name"])){
    if(empty ($_POST["e_name"])){
        $err = "Event Name is req!!";
    }
    else if(empty ($_POST["e_venue"])){
        $err = "Venue is req!!";
    }
    else if(empty ($_POST["e_date"])){
        $err = "Date is req!!";
    }
    else if(!check_date($_POST["e_date"])){
        $err = "Incorrect date!";
    }    
    else if(check_img()!=null){
        $err = check_img();
    }

    else {
        $query = "UPDATE event 
            set e_name = '$_POST[e_name]' , e_venue ='$_POST[e_venue]', 
                e_desc='$_POST[e_desc]', e_date='$_POST[e_date]'
                where id = $_REQUEST[id]";    
        $r =run_sql($query);    
        $lid =$_REQUEST[id];
if(isset($_FILES["at1"]) && empty($_FILES["at1"]["name"])!=true){
    move_uploaded_file($_FILES["at1"]["tmp_name"], "upload/event/$lid.jpg");
}
     redirect("event.php?msg=3");
    }
}
?>
<div class="row">    
    <div class="col-sm-10 col-sm-offset-1">    
        <h1>Update</h1>
    <form method="post" enctype="multipart/form-data" class="form-horizontal">
      <div class="form-group">
      <label for="e_name">Event Name</label>
      <input required class="form-control" type="text" value="<?php echo $orow["e_name"]?>" name="e_name"/>
      </div>
      <div class="form-group">
      <label for="e_venue">Venue</label>
      <input required class="form-control" type="text" value="<?php echo $orow["e_venue"]?>" name="e_venue"/>
      </div>
      <div class="form-group">
      <label required for="e_date">Date:</label>
      <input class="form-control" type="date" value="<?php echo $orow["e_date"]?>" name="e_date"/>
      </div>
      <div class="form-group">
      <label for="e_desc">Description:</label>
      <textarea class="form-control" name="e_desc" rows="6" cols="60"><?php echo $orow["e_desc"]?></textarea>      
      </div>
      <div class="form-group">
      <label for="at1">Current Pic:</label>      
      <img style="height: 300px;" class="img img-responsive img-rounded" src="upload/event/<?=$_REQUEST["id"]?>.jpg" />
      </div>
      <div class="form-group">
      <label for="at1">Change Pic:</label>      
      <input class="form-control" type="file" name="at1"/>
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
