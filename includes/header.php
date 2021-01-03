<!DOCTYPE html>
<html>
<head>
  <title></title>
     <style type="text/css">
       .login_register{
        background-color: #2e2e2e;
        height: 60px;
       }
       .login_btn_btn_2{
        float: right;
        margin-top: 15px;
       }
       .logo{
          margin-top: 10px;
       }
       .btn_header_btn_2{
        height: 40px;
        text-align: center;
        font-size: 10px;
        margin-top: 15px;

       }
       .dropdown-menu{
        background-color: black;

      }

       .btn{
        font-size: 14px;
        
       }
       .dropdown-a{
           font-size: 14px;

       }
       #navigation_bar{

       }
       .btn_header_btn_3{
        float: right;
       }
       .header_search{
        float: right;
        margin-top: 15px;
       }
       .btn_header_btn_4{
        height: 39px;
        text-align: center;
        font-size: 13px;
        margin-top: 10px;
        margin-right: 15px;
       }


     </style>
</head>
<body>
     <header>
   <div class="container-fluid login_register">
     
       <div class="logo"> <a href="index.php"><img src="img/rekar2.jpg" alt="image"/></a> </div>
            
   <?php   if(strlen($_SESSION['login'])==0)
  { 
?>

 <div class="login_btn_btn_2"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
 <div class="dropdown btn_header_btn_3">
            <button class="btn_header_btn_4 btn dropdown-toggle" type="button" data-toggle="dropdown">COUNTRY SELECT<span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-a" href="How To Works.php">EGYPT</a></li>
              <li><a class="dropdown-a" href="helpCenter.php">UAE</a></li>
            </ul>

          </div>
<?php }
else{ 

echo "Welcome To Car rental portal";
 } ?>
   </div>
 
  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>
            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>

<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
  {

   echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile Settings</a></li>
              <li><a href="update-password.php">Update Password</a></li>
            <li><a href="my-booking.php">My Booking</a></li>
            <li><a href="post-testimonial.php">Post a Testimonial</a></li>
          <li><a href="my-testimonials.php">My Testimonial</a></li>
            <li><a href="logout.php">Sign Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile Settings</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Update Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Booking</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Post a Testimonial</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Testimonial</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Sign Out</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a> </li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="rent.php">Rent A Car</a></li>
            <li><a href="car-listing.php">List My Car</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="terms&conditions.php">TermsOfService</a></li>

          </div></li>  
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end --> 
  
</header>
</body>
<!-- Start of Async Drift Code -->
<script>
"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('8ipyiehdx29z');
</script>
<!-- End of Async Drift Code -->
</html>