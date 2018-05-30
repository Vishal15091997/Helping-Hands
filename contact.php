<?php include './header.php';?>
<script>
   $(function(){
$('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
});
$('.maps').mouseleave(function () {
    $('.maps iframe').css("pointer-events", "none");
});       
$('.maps').mouseenter(function () {
    $('.maps iframe').css("pointer-events", "none");
});       
   });
</script>
<?php
if(isset($_POST["fname"])){
    $msg="First Name : $_POST[fname]
          \nLast Name : $_POST[lname] 
          \nEMail : $_POST[email]  
          \nPhone : $_POST[phone]  
          \nMessage : $_POST[message]  
          ";
    mail_it(ADMIN_EMAIL, "Contact from HelpingHands.com", $msg, null);
    echo "<h2 style='color:red'>Msg Sent, we will contact you in 2 business days!</h2>";
}
?>
<div class="row">
    <div class="col-sm-4">        
                  <h3 class="myheading"><strong>Helping Hands</strong></h3><br><br>
              <span class="glyphicon  glyphicon-map-marker sm-icon"></span><strong>Address:</strong>  Jivan Vihar, Raipur, Chhattisgarh 492001<br><br>
<span class="glyphicon glyphicon-phone sm-icon"></span><strong>Phone:</strong>   084359 56889<br><br>
<span class="glyphicon glyphicon-print sm-icon"></span><strong>Fax:</strong>   0771 401xxxx<br><br>
<span class="glyphicon glyphicon-envelope sm-icon"></span>  info@aakankshaindia.org<br><br>
<span class="glyphicon glyphicon-globe sm-icon"></span>  http://aakankshaindia.org</h3><br>

    </div>
    <div class="col-sm-8">        
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header mybg" >Ask Query</legend>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="fname" name="fname" type="text"  placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="lname" name="lname" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="email" name="email" type="email" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-sm-10">
                                <input required id="phone" name="phone" type="tel"  placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-sm-1  text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-sm-10">
                                <textarea required class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                        <div  class="form-group">
                            <div class="col-sm-10 col-sm-offset-1">
                           <h4 style="color: red;"></h4>
                            </div>  
                        </div>  
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-1 text-center">
                                <button style="background-color: #666666; border: 0px;" type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>        
    </div>
</div>
    <div class="row">
      <div class="col-sm-12 maps">   
          <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119003.02083043272!2d81.58057940619494!3d21.238017901312748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28dd393ad3fc9d%3A0xb0a6360802e5d4d3!2sAakansha!5e0!3m2!1sen!2sin!4v1499151682238" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>              
          </div>
      </div>
    </div>

<?php include './footer.php';?>