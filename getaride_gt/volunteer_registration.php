<?php
//connect to database
$dbname = 'gt_getaride';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>

<?php
include_once 'database-config.php';
if(isset($_POST['btn-save']))
{
 // variables for input for accounts table
  $lastname = $_POST['lastname'];
 $firstname = $_POST['firstname'];
 $Username = $_POST['Username'];
 $Email = $_POST['Email'];
 $Password = $_POST['Password'];
 $Phone = $_POST['Phone'];
 $Gender = $_POST['Gender'];

 // variables for input for volunteer table
 //$affiliation = $_POST['affiliation'];
 //$period_preference = $_POST['period_preference'];
 //$lugage_limit = $_POST['lugage_limit'];
 //$offer_pickup = $_POST['offer_pickup'];
 //$offer_housing = $_POST['offer_housing'];
 //$trip_rounds = $_POST['trip_rounds'];
 //$pick_up_limit= $_POST['pick_up_limit'];

 // variables for input data

 //sql query for inserting data into ACCOUNTS table
 $sql_query = "INSERT INTO accounts(lastname, firstname, Email, Gender, Phone, Username,  Password) VALUES('$lastname','$firstname', '$Email', '$Gender', 'Phone', '$Username', '$Password')";

 // sql query for inserting data into VOLUNTEER table
//$sql_query = "INSERT INTO volunteer(affiliation, period_preference, lugage_limit, offer_pickup, offer_housing, trip_rounds, pick_up_limit) VALUES('$affiliation', '$period_preference', '$lugage_limit', '$offer_pickup', '$offer_housing', '$trip_rounds', '$pick_up_limit')";

 // sql query for inserting data into STUDENT table
 //$sql_query = "INSERT INTO Student_acc(St_level, Major, Airport_pickup, Require_housing) VALUES('$St_level', '$Major', '$Airport_pickup', '$Require_housing')";

 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
<script type="text/javascript">
	alert('First part of form finished successfully. Please fill in aiport form. ');
	window.location.href='login.php';
</script>
<?php
 }
 else
 {
  ?>
<script type="text/javascript">
	alert('An error occurred while inserting your data');
</script>
<?php
 }
 // sql query execution function
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--



-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link href="css/stregform.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<script src = "js/validreg.js" > </script>
<style>
#header-wrapper
{
	background: url(images/regbg.jpg) no-repeat center top;
	background-size: cover;
}

body {
		margin: 0px;
	padding: 0px;
	background-color: #00254c;
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 12pt;
	font-weight: 400;
	color: rgba(0,0,255,.8);
}
#errors {
	font-size: 200%;
    color: red;
    font-weight: bold;
}	background-color: #eeb211;

</style>



</head>

<body>
<!--header portion-->
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1 style="text-transform: uppercase">Get A Ride</h1>
				<p>Design by R&D</p>
			</div>
		</div>
		<div id="menu" class="container">
			<ul>
				<li><a href="index.html" accesskey="1" title="">Home</a></li>
				<li><a href="student_page.php" accesskey="1" title="">student page</a></li>
				<li class="current_page_item"><a href="volunteer_page.php" accesskey="2" title="">volunteer page</a></li>
				<li><a href="student_registration.html" accesskey="4" title="">Student Registration</a></li>
				<li><a href="volunteer_registration.html" accesskey="3" title="">Volunteer Registration</a></li>
				<li><a href="admin_page.php" accesskey="1" title="">admin page</a></li>
				<li><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>

	<!--welcome message-->
	<div id="welcome-wrapper">
		<div id="welcome">
			<p><strong>GET A RIDE</strong> is a Web Application to help provide housing and transportation for incoming transient students at <a href="http://gatech.edu" rel="nofollow">Georgia Tech</a>.
		</div>
	</div>

		<!--body-->
	<div id="body" class="container">



		<div class="inner contact">
		
		<div id ="errors" >
		</div>

            <h1 style="text-align: center;">Volunteer Registration</h1>
            <h3 style="color: #FFFFFF; text-align: center;">Would you like to offer your services to incoming students? Register Here!</h3>


		<h3 style="color:#FFFFFF; text-align: center; text-decoration: underline">Basic Information</h3>
                <!-- Form Area -->
                <div class="contact-form">
				<!--  Inputs -->

                  <div class="col-xs-4 col-xs-offset-4">
                    <form method="post">
                       <table align="center">
                       <tr>
                       <td align="center"><a href="index.html">Go Home</a></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="firstname" placeholder="First Name" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="lastname" placeholder="Last Name" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="Username" placeholder="Username" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="Email" placeholder="Email" required /></td>
                       </tr>
                   	 <tr>
                       <td><input type="text" name="Password" placeholder="Password" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="Phone" placeholder="Phone XXXXXXXXXX" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="Gender" placeholder="Gender (Male or Female)" required /></td>
                       </tr>
<!--                       <tr>
                       <td><input type="text" name="affiliation" placeholder="affiliation" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="period_preference" placeholder="period preference" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="lugage_limit" placeholder="lugage limit" required /></td>
                       </tr>
                       <tr>
                       </tr>
                       <tr>
                       <td><input type="text" name="offer_housing" placeholder="offer housing" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="trip_rounds" placeholder="trip rounds" required /></td>
                       </tr>
                       <tr>
                       <td><input type="text" name="pick_up_limit" placeholder="pick up limit" required /></td>
                       </tr> -->
                       <tr>
                       <td><button type="submit" name="btn-save"><strong>Submit</strong></button></td>
                       </tr>
                       </table>
                       </form>
                       </div>
                   </div>
      </div><!-- End Inner -->

</div>
</body>

<div id="footer">
	<p>&copy; GT GET A RIDE. All rights reserved. Design by <a href="#" rel="nofollow">R&D</a>.</p>
</div>

</html>
