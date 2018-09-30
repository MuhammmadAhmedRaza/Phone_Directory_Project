
<?php session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con , 'userregistration');
$userid = $_SESSION['user_id'];
$sql = "SELECT * FROM `usercontact`as c INNER JOIN users as u ON u.id=c.user_id WHERE c.user_id= '".$userid."'";
$result = mysqli_query($con, $sql);

// print_r($row);exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600">
	<link rel="stylesheet" type="text/css" href="Style1.css">

</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
     <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav">

          <a class="nav-link navlogo text-center" href="index.php">
            <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
          </a>

      
        
      
      <ul class="navbar-nav2 ml-auto">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome <?php echo $_SESSION['user_name']; ?></a>
            <ul class="dropdown-menu">
                <!-- <li class="resflset"><a href="profile.php"><i class="fa fa-fw fa-cog"></i> Edit profile</a></li> -->
                <li class="divider"></li>
                <li class="resflset"><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
      </ul>
      
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
<table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>Company</th>
         <th>Contact</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           while ($row = mysqli_fetch_assoc($result)) {
                  echo '<tr>
                  <td>'.$row["user_id"].'</td>
                  <td>'.$row["name"].'</td>
                  <td>'.$row["company"].'</td>
                  <td>'.$row["phone"].'</td>
                </tr>';
      }?>
    </tbody>
  </table>
      <!-- Icon Cards-->

    <!--     <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
            <div class="inforide">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-4 rideone">
                    <img src="https://vignette.wikia.nocookie.net/nationstates/images/2/29/WS_Logo.png/revision/latest?cb=20080507063620">
                </div>
                <div class="col-lg-9 col-md-8 col-sm-8 col-8 fontsty">
                    <h4>Employee</h4>
                    <h2>20</h2>
                </div>
              </div>
            </div>
        </div> -->
    </div>
  </div>
</div>

</body>

</body>
</html>