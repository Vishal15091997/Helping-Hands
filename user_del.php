<?php require_once 'header.php';?>
<?php
check_admin();
$query = "delete from app_users where id = $_REQUEST[id] ";
$r = run_sql($query);
redirect("users.php?msg=2");
?>
<?php require_once 'footer.php';?>
