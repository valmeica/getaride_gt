<?php 
//connect to database
$dbname = 'assignment10';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
?>

<?php
include_once 'database-config.php';
if(isset($_POST['btn-save']))
{
 // variables for input data
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 // variables for input data

 // sql query for inserting data into database
 $sql_query = "INSERT INTO users(username,email,password) VALUES('$username', '$email', '$password')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('User Created. Data Are Inserted Successfully ');
  window.location.href='login.php';
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
    <td><input type="text" name="username" placeholder="Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
	 <tr>
    <td><input type="text" name="password" placeholder="Password" required /></td>
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