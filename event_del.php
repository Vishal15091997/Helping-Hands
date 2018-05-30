<?php $page="adv_det" ?>
<?php require_once 'header.php';?>
<?php
check_admin();
$query = "delete from event where id = $_REQUEST[id] ";
$r = run_sql($query);
if(mysqli_affected_rows()>0){
    unlink("upload/event/$_REQUEST[id].jpg");
}
redirect("event.php?msg=2");
?>
<?php require_once 'footer.php';?>
