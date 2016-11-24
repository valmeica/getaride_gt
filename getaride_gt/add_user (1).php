<?php
//connect to database
$dbname = 'gt_getaride';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

?>

<?php
include_once 'db-config.php';
if(isset($_POST['btn-save']))
{
 // variables for input for accounts table
 $fname = $_POST['first_name'];
 $lname = $_POST['last_name'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $phone = $_POST['phone'];
 $gender = $_POST['gender'];

 // variables for input for volunteer table
 $affiliation = $_POST['affiliation'];
 $period_preference = $_POST['period_preference'];
 $lugage_limit = $_POST['lugage_limit'];
 $offer_pickup = $_POST['offer_pickup'];
 $offer_housing = $_POST['offer_housing'];
 $trip_rounds = $_POST['trip_rounds'];
 $pick_up_limit= $_POST['pick_up_limit'];

 // variables for input for student table
 $St_level = $_POST['St_level'];
 $Major = $_POST['Major'];
 $Airport_pickup = $_POST['Airport_pickup'];
 $Require_Housing = $_POST['Require_housing'];


 // variables for input data

 // sql query for inserting data into ACCOUNTS table
 $sql_query = "INSERT INTO accounts(first_name, last_name, username,email,password, phone, gender) VALUES('$fname', '$lname', '$username', '$email', '$password', '$phone', '$gender')";

 // sql query for inserting data into VOLUNTEER table
 $sql_query = "INSERT INTO volunteer(affiliation, period_preference, lugage_limit, offer_pickup, offer_housing, trip_rounds, pick_up_limit) VALUES('$affiliation', '$period_preference', '$lugage_limit', '$offer_pickup', '$offer_housing', '$trip_rounds', '$pick_up_limit')";

 // sql query for inserting data into STUDENT table
 $sql_query = "INSERT INTO Student_acc(St_level, Major, Airport_pickup, Require_housing) VALUES('$St_level', '$Major', '$Airport_pickup', '$Require_housing')";
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('User Created. Data Are Inserted Successfully ');
  window.location.href='adminview.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('An error occured while inserting your data');
  </script>
  <?php
 }
 // sql query execution function
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Creation</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>User Creation</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.html">back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="fname" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="lname" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="username" placeholder="username" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="password" placeholder="Password" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="phone" placeholder="Phone" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="gender" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>
