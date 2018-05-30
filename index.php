<?php include_once './header.php'; ?>
<marquee>
<div class="row">
<?php
$query = "select * from event where e_date >= '$today' order by e_date limit 2 ";
$r = run_sql($query);
while($row = mysqli_fetch_array($r)){
?>
<div class="col-sm-6">
<div style="background-color: #cccccc; border-color: #888888; color: black;" class="alert alert-warning fade in">
<!--    <a href="#" class="close" data-dismiss="alert" >&times;</a>-->
    <div class="row">
        <div class="col-sm-10">
            <h4>Helping Hands: <?=$row["e_name"]?> (<?=$row["e_date"]?>)</h4>                
        </div>
        <div class="col-sm-2">
            <a href="#" class="btn btn-danger btn-sm" data-dismiss="alert" >Close</a>            
        </div>
    </div>
  </div>
</div>
<?php
}
?>
</div>
</marquee>

<?php include_once './car1.php'; ?>
<br>
<?php
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){
        $msg = "Registered Successfully!";
    }
}
echo "<h1 style='color: red'>$msg</h1>";
?>  
<br>
<div class="row">
    <div class="col-sm-6 text-justify">        
        <h1 class="mybg text-center">Helping Hands</h1>
        <p>Helping Hands is not for profit, it is for helping handicapped children in there education.</p> 
        <p>We are a non-denominational, non-political organization and we have been working in CG for over 6 years!</p> 
        <p>We are focusing on handicapped child education so that they can stand themselves</p> 
        <p>We do this through well planned manner. </p> 


    </div>
    <div class="col-sm-6"> 
        <br>
        <?php include_once './car3.php'; ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 text-justify">
        <h1>Mission</h1> 
       
            <p>Provide care, love and development for Handicapped Children.</p>
        <p>We strive to help as many children as possible and focus on those in most urgent need.</p>
       
        
    </div>
    <div class="col-sm-6 text-justify">
        <h1>Philosphy</h1> 
        <p>We try to help as many children as possible</p>
        <p>We focus on those in greatest need</p>
        <p>We do not discriminate or avoid difficult cases</p>
        </div>
</div>
<?php include_once './footer.php'; ?>
