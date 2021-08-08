<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silverstone High School</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/9701a01010.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">\
    <style>
    #banner_image
    {
    background-image: url("images/homebanner.jpg");
    background-repeat:no-repeat;
    background-position:center center;
    background-size: cover;
    padding-top: 75px;
    padding-bottom: 50px;
    text-align: center;
    color: #f8f8f8;
  }
  #banner_content{
    position: relative;
    padding-top: 6%;
    padding-bottom: 6%;
    margin-top: 12%;
    margin-bottom: 6%;
    opacity:0.8;
    max-width: 660px;
    background-color:rgb(0,0,0);
}
footer{
    padding: 10px 0;
    background-color: #101010;
    color:#9d9d9d;
    margin-bottom: 0px;
    width: 100%;
}
.jumbotron{
  background-color:white;
  height:280px;
}
.col-md-3 {
  border-radius:2px;
  height:100px;
  margin-left:2px;
  width:220px;
  padding:15px;
  color:white;
  font-size:15px;
  transition: transform 0.5s;
}
.col-md-3:hover{
  transform:translate(0,-10px);
}

    </style>
  </head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand navbar-left">Silverstone High School</a>
          </div>
          <div class="navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home&nbsp;<span class="glyphicon glyphicon-home"></span></a></li>
              <li><a href="about.php">About&nbsp;<span class="glyphicon glyphicon-info-sign"></span></a></li>
			  <li><a href="gallery.php">Gallery&nbsp;<span class="glyphicon glyphicon-camera"></span></a></li>
			  <li><a href="contact.php">Contact&nbsp;<span class="glyphicon glyphicon-earphone"></span></a></li>
        <li><a href="login.php">Login&nbsp;<span class="glyphicon glyphicon-log-in"></span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="jumbotron">
          <h1 style="text-align:center;"><img src="images/logo.png">Silverstone High School
          <h4>Sector-6, Virat Khand, Gomtinagar, Lucknow</h4></h1>
        </div>
      </div>
      <div id="banner_image">
        <div class="container">
          <div id="banner_content">
            <a href="admissions.php" class="btn btn-danger btn-lg active">Online Admissions&nbsp;<span class="glyphicon glyphicon-education"></span></a>
          </div>
        </div>
      </div>
      <marquee direction="right"><h2>Our Believe: "Where there is a Will there is a Way."</h2></marquee>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6" style="background-color:dodgerblue;">
            <caption>
              <p>Our school has great<br> record in academics.</p>
            </caption>
          </div>
          <div class="col-md-3 col-sm-6"  style="background-color:slateblue;">
            <caption>
              <p>Our School has many<br> achievements <br>in Sports also.</p>
            </caption>
          </div>
          <div class="col-md-3 col-sm-6" style="background-color:violet;">
            <caption>
              <p>Our students our graduating from best colleges<br>of  our Country.</p>
            </caption>
          </div>
          <div class="col-md-3 col-sm-6" style="background-color:blue;">
            <caption>
              <p>We have the best faculty to<br> provide best education to <br>your children.</p>
            </caption>
          </div>
        </div>
      </div>
      <marquee><h2>Our Motto: To provide <b>Quality Education</b> at minimal cost so that every student should get a chance to achieve his dreams.</h2></marquee>
      <footer>
        <div class="container">
          <center>
            <p>Copyright © Silverstone High School. All Rights
                Reserved | Contact Us: +91 98765 98765</p>
              </center>
        </div>
     </footer>
</body>
</html>