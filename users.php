<?php include_once './header.php'; ?>
<div  class="myheading">
<h1>Users</h1>
</div>
<div class="container-fluid">
<?php
check_admin();
$msg="";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==2){
        $msg = "User Deleted Successfully!";
    }
    else  if($_REQUEST["msg"]==3){
        $msg = "User Updated Successfully!";
    }
}
echo "<h1 style='color: red'>$msg</h1>";
?>       
</div>
<div id="users" class="container-fluid text-center bg-grey slideanim">    
  <h2  class="well">Our Supporters</h2><br>
    <form class="form-inline text-left">
    <input class="form-control" type="text" name="si" value="<?php echo $_REQUEST["si"]?>" />
    <input class="form-control" type="submit" value="Search"/>
</form>
  
  <div class="row text-center slideanim">
      <table class="table table-responsive table-hover table-striped">
          <tr>
              <th>Name</th>
              <th>EMail</th>
              <th>Phone</th>
              <th>Role</th>
              <th>Action</th>
          </tr>
    <?php
        $query = "select * from app_users where not role = 'admin' ";
        if(!empty($_REQUEST["si"])){
            $query= $query . " and user_name like '%$_REQUEST[si]%'"; 
        }
        $r = run_sql($query);
        while($row = mysqli_fetch_array($r))
        {
    ?>
          <tr>
              <td><?=$row["user_name"]?></td>
              <td><?=$row["email"]?></td>
              <td><?=$row["phone_no"]?></td>
              <td><?=$row["role"]?></td>
              <td>
                       <a class='btn btn-primary btn-sm' href='user_up.php?id=<?=$row["id"]?>'>Edit</a>
                       <a class='btn btn-primary btn-sm' href='user_del.php?id=<?=$row["id"]?>'>Delete</a>
              </td>
          </tr>
      <?php
        }
      ?>
          </table>
  </div><br>
</div>

<?php include_once './footer.php'; ?>