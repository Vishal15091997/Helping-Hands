<?php include_once './header.php'; ?>
<div  class="myheading">
<h1>About Us</h1>
</div>
<br>
<div class="row text-justify" style="font-size: 1.2em;">
    <div class="col-sm-6">
<p>Our mission is to create wholeness for children and youth with developmental disabilities through education, extended family living, and therapy so that they may be better understood, they may more fully unfold their potential, and they may meaningfully participate in life..</p>
<p>amphill Special School is a Waldorf school accredited by AWSNA and the Middle States Association of Colleges and Schools Commissions on Elementary and Secondary Schools. Our school also is licensed by the Pennsylvania Departments of Education and Public Welfare and we are a Pennsylvania Approved Private School for children with intellectual and developmental disabilities. We are part of the worldwide Camphill movement and the only Camphill community in North America for children.</p>
    </div>
    <div class="col-sm-6">
        <div class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/CL8GMxRW_5Y" frameborder="0" allowfullscreen></iframe>            
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-sm-6" >
        <div class="panel panel-info" >
              <div class="panel-heading"><h3>Our sponsors</h3></div>
        <div class="panel-body">
        <ul class="list-group">
            <?php
            $query = "select user_name from app_users where role = 'Sponsor' or role = 'Both' order by rand() limit 5 ";
            $r = run_sql($query);
               while($row = mysqli_fetch_array($r)){
                   echo "<li class='list-group-item'>$row[user_name]</li>";
               }
            ?>
        </ul>
        </div>
        </div>

    </div>
    <div class="col-sm-6 ">        
          <div class="panel panel-info">
              <div class="panel-heading"><h3>Our Volunteers</h3></div>
        <div class="panel-body">
        <ul class="list-group">
            <?php
            $query = "select user_name from app_users where role = 'Volunteer' or role = 'Both' order by rand() limit 5 ";
            $r = run_sql($query);
               while($row = mysqli_fetch_array($r)){
                   echo "<li class='list-group-item'>$row[user_name]</li>";
               }
            ?>            
        </ul>
        </div>
        </div>
        
    </div>
</div>
<?php include_once './footer.php'; ?>