<?php
$servername = "localhost";
$username = "Aditya";
$dbpassword = 1511;
$dbname = "signupdata";

// Try connecting to the Database
$con = mysqli_connect($servername,$username,$dbpassword,$dbname);

//Check the connection
if($con){
    //echo "Connection Successful";
    ?>
    <script>
    	alert('connection successfull');
    </script>
    <?php
}else
{
    //echo "No connection";
    die("no connection" . mysqli_connect_error());
}
?>