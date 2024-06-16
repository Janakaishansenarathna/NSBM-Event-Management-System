<?php
//connect db via config.php
@include 'config.php';

//check for submit 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    //get data & add it into variables
    $email = $_POST["email"];
    $sid = $_POST["sid"];

    $pnumber  = $_POST["pnumber"];
    $tag = $_POST["tag"];
   
    //sql command to add data into database
    $sql = "INSERT INTO `ticket` (email,pnumber,tag,sid) VALUES('$email','$pnumber','$tag','$sid')";

    //excuet sql command
    $result = mysqli_query($conn,$sql);
    //run a javascript to show alert box & redirect into dashboard.php
    echo "<script>
    alert('Ticket Purchesed Successfully');
    window.location.href = 'index.html';
    
    </script>";

   
}




?>