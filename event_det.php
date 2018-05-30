<?php include_once './header.php'; ?>
    <?php
        $query = "select * from event where id = $_REQUEST[id]";
        $r = run_sql($query);
        $row = mysqli_fetch_array($r);
    ?>
<div  class="myheading">
<h1><?=$row["e_name"]?></h1>
</div>
<div class="row">
    <br>
    <div class="col-sm-6">        
        <img class="img-rounded img-responsive" src="upload/event/<?=$row["id"]?>.jpg"/>
    </div>
    <div class="col-sm-6">        
        <div class="panel-group">
          <div class="panel panel-info">
              <div style="background-color: #666666; color: white;" class="panel-heading"><?=$row["e_name"]?></div>
            <div class="panel-body">
                <strong>Name:</strong> <?=$row["e_name"]?><br>
                <strong>Date:</strong> <?=$row["e_date"]?><br>
                <strong>Venue:</strong> <?=$row["e_venue"]?><br>
                <strong>Desc:</strong><?=$row["e_desc"]?><br>  
                <?php
                 if(is_admin())
                     {
                ?>
                       <br><a class='btn btn-primary btn-lg' href='event_up.php?id=<?=$row["id"]?>'>Edit Event</a>;
                       <br><br><a class='btn btn-primary btn-lg' href='event_del.php?id=<?=$row["id"]?>'>Delete Event</a>;
                <?php
                    }
                ?> 
            <a href="event.php" class="btn btn-primary btn-lg">Back</a>
            </div>
          </div>
        </div>
    </div>
</div>

<?php include_once './footer.php'; ?>