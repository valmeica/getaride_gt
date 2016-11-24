

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
if(isset($_GET['edit_id']))
{
 $sql_query = "SELECT * FROM users WHERE id=".$_GET['edit_id'];
$result_set = mysqli_query($connection, $sql_query);
 $fetched_row = mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE users SET username='$username', email='$email',password='$password' WHERE id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Was Updated Successfully');
  window.location.href='info.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('An error occured while updating data');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: info.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Information</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>Edit Information</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="text" name="username" placeholder="User Name" value="<?php echo $fetched_row['username']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="password" name="password" placeholder="password" value="<?php echo $fetched_row['password']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>