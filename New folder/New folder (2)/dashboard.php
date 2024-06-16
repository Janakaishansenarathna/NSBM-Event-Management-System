<?php
//connect database via config.php
@include 'config.php';

//sql code for getting events by date in ascending order
$sql = "SELECT * FROM `ticket`";
//excute sql query
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link href="footer.css" rel="stylesheet" type="text/css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  </head>
  <body style="padding-top: 70px">
  <div class="container-fluid">
     <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><img src="images/Elegant Blue Black Music Festival Logo/2-removebg-preview.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-section">About</a>
      </li>
     <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="./academic.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academic</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
	<a class="dropdown-item" href="./ieee.html">IEEE</a>
	  <a class="dropdown-item" href="./isaca.html">ISACA</a>
	  <a class="dropdown-item" href="./logistics.html">Logistics Circle</a>
	  <a class="dropdown-item" href="./mathematics.html">Mathematics and Statistics Circle</a>
    </div>
    <!-- Add more faculties and clubs here -->
</li>
		<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="./sports.html" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
	  <a class="dropdown-item" href="./sports.html#cricket-section">Cricket</a>
	  <a class="dropdown-item" href="#football-section">Football</a>
	  <a class="dropdown-item" href="#">Rugby</a>
	  <a class="dropdown-item" href="#">Badminton</a>
	  <a class="dropdown-item" href="#volleyball-section">Volleyball</a>
    <!-- Add more faculties and clubs here -->
  </div>
</li>
	<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="international.html" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">International</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
	  <a class="dropdown-item" href="./aeisac.html">AIESEC</a>
	  <a class="dropdown-item" href="./rotaract.html">ROTARACT CLUB</a>
    <!-- Add more faculties and clubs here -->
  </div>
</li>
		<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="./activity.html" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activity based</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
	    <a class="dropdown-item" href="#media-section">Media Club</a>
	  <a class="dropdown-item" href="#music-section">Music Club</a>
	  <a class="dropdown-item" href="#drama-section">Drama Club</a>
	  <a class="dropdown-item" href="#dancing-section">Dancing Club </a>
    <!-- Add more faculties and clubs here -->
  </div>
</li>
		<li class="nav-item">
        <a class="nav-link" href="./gallery.html">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
		  <li class="nav-item">
        <a class="nav-link" href="./ticketing.html">Ticketing</a>
      </li>
    </ul>
  </div>
</nav>
<br>
	

<h2>Dashboard</h2><hr>
<br>

<div class="row">
<?php
$counter = 0;

//check that querie return something or not

if(mysqli_num_rows($query) <= 0){

  echo '<br><center><h5>There No Requests<h5></center><br>'
  ;}

//if it return something then fetch them into bootstrap5 cards
foreach ($query as $q) {
    if ($counter >= 50) { //this loop will stop when after fetching data for 18 cards
        break;
    }
    ?> 

    <!--bootstrap5 card-->
    <div class="col-12 col-md-6 col-lg-3 mb-3">
        <br>
        <div class="card" style="width: 18rem; border: 1px solid black;">
            <div class="card-body">
                <h5 class="card-title">Student ID Number : <?php echo $q['sid']; ?></h5>
                <p class="card-text"><?php echo $q['tag']; ?></p>
                <a href="delete.php?id=<?php echo $q['id']?>" class="btn btn-dark">Delete Request</a>
            </div>
        </div>
    </div>
<?php

    $counter++;
}
?>




<br>
 
  

  	<!-- body code goes here -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>




  <script type="text/javascript" src="./main.js"></script>

  <script>
  //excute a function call checkdashlogin to check user is loged in or not
document.addEventListener("DOMContentLoaded", function () {
checkdashlogin();
});</script>

</body>
</html>


