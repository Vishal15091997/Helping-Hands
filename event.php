<?php include_once './header.php'; ?>
<div  class="myheading">
<h1>Events</h1>
</div>
<div class="container-fluid">
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg = "Event Added Successfully!";
    }
    else  if($_REQUEST["msg"]==2){
        $msg = "Event Deleted Successfully!";
    }
    else  if($_REQUEST["msg"]==3){
        $msg = "Event Updated Successfully!";
    }
}
echo "<h1 style='color: red'>$msg</h1>";
?>    
<?php
if(is_admin()){
    echo '<br><a class="btn btn-primary btn-lg" href="event_add.php">Add Event</a>';
}
?>    
</div>
<div id="events" class="container-fluid text-center bg-grey slideanim">    
  <h2  class="well">Our Events</h2><br>
  <div class="row text-center slideanim">
    <?php
        $query = "select * from event";
        $r = run_sql($query);
        while($row = mysqli_fetch_array($r))
        {
    ?>
    <div class="col-sm-4">
      <div class="thumbnail">
          <img src="upload/event/<?=$row[id]?>.jpg" style="width: 300px; height: 250px;" >
        <p><strong><?=$row[e_name]?></strong></p>
        <p><?=$row[e_date]?></p>
        <a class="btn btn-primary" href="event_det.php?id=<?=$row[id]?>">Read More</a>
      </div>
    </div>
      <?php
        }
      ?>
  </div><br>
</div>

<?php include_once './footer.php'; ?>