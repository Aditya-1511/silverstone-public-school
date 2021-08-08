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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/signupstyle.css">
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
            <a href="index.php" class="navbar-brand">Silverstone High School</a>
          </div>
          <div class="navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="about.php">About&nbsp;<i class="fas fa-info-circle"></i></a></li>
              <li><a href="login.php">Login&nbsp;<span class="glyphicon glyphicon-log-in"></span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-xs-offset-1 column_style">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h4>Sign Up</h4>
              </div>
                   <div class="panel-body">
                   <form action="" method="POST">
                       <div class="form-group">
                        Name
                         <input type="text" name="NAME" class="form-control block" required="true">
                       </div>
                       <form action="">
                       <div class="form-group">
                        Father's Name
                         <input type="text" name="FNAME" class="form-control block">
                       </div>
                       <form action="">
                       <div class="form-group">
                        Contact Number
                         <input type="text" name="CONTACT" class="form-control block" required="true">
                       </div>
                     <form action="">
                       <div class="form-group">
                        E-mail
                         <input type="email" name="EMAIL" class="form-control block" required="true">
                       </div>
                       <div class="form-group">
                         Password
                         <input type="password" name="PASSWORD" class="form-control" required="true">
                       </div>
                       <div class="form-group">
                         Confirm Password
                         <input type="password" name="CPASSWORD" class="form-control" required="true">
                       </div>
                       <button type="submit" name="submit" class="btn btn-success btn-block">Sign Up</button></br></br>
                     </form></br>
              </div>
              <div class="panel-footer">
                <p>Have an account already? <a href="login.php">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
                Follow us on:
          <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
		    <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
	        <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
<?php
    include 'signupdata.php';

    if(isset($_POST['submit'])){
      $name = $_POST['NAME']; 
      $fname = $_POST['FNAME'];
      $contact = $_POST['CONTACT'];
      $email = $_POST['EMAIL'];
      $password = $_POST['PASSWORD']; 
      $cpassword = $_POST['CPASSWORD'];
      
      $insertquery = "INSERT INTO Details(name, fname, contact, email, password, cpassword) VALUES ('$name','$fname','$contact','$email','$password','$cpassword') ";
      $res = mysqli_query($con,$insertquery);
      if($res){
        ?>
        <script>
          alert("data inserted properly");
        </script>
        <?php
      }else{
        ?>
        <script>
          alert("data not inserted");
        </script>
        <?php
      }
    }
    ?>