<div id="car2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
     <?php
     $files = scandir("img");
     $allowed = Array(".png", ".jpg", "jpeg");
     $first=true;
     foreach ($files as $f1) {
         if(strlen($f1)>4){
            $ext = substr($f1, -4);  
             if(in_array($ext, $allowed)){
                 if($first){
                     $cls="active";
                 }
                 else {
                     $cls="";
                 }
                 $first=false;
     ?>
    <div class="item <?=$cls?>">
        <img src="img/<?=$f1?>">
    </div>
      <?php
            }
         }
     }
      ?>
  </div>
  <a class="left carousel-control" href="#car2"  data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" ></span>
  </a>
  <a class="right carousel-control" href="#car2"  data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"  ></span>
  </a>
</div>
