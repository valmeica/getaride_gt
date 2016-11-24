
<?php 
    session_start();
    $role = $_SESSION['sess_userrole'];
    if(!isset($_SESSION['sess_username']) && $role!=0){
      header('Location: login.php?err=2');
    }
?>

<?php
include_once 'database-config.php';
/*
// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM ACCOUNTS WHERE Accounts_id=".$_GET['delete_id'];
 mysqli_query($connection, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition */
?>

<?php
//connect to database
$dbname = 'gt_getaride';
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
     $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
?>

<?php
  if (isset($_POST['Password']) && isset($_POST['Username'])) {
      if ($_POST['Password'] == $pass && $_POST['Username'] == $username) {
          if (!session_id())
              session_start();
          $_SESSION['logon'] = true;

          header('Location: studentview.php');
          die();
      }
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
=

    <!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student</title>
<link rel="stylesheet" href="style.css" type="text/css" />


<script type="text/javascript">
function edt_id(id)
{
 if(confirm('Sure to edit ?'))
 {
  window.location.href='student_edit_data.php?edit_id='+id;
 }
}


</script>
</head>
<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Student Page</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php echo $_SESSION['sess_username'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

<center>






<div id="body">
 <div id="content">
    <label>Welcome Student<a href="#" target="_blank"></a></label>
    </div>

 <div id="content">
    <table align="center">

	</tr>
	<th>Account ID</th>
    <th>Last Name</th>
	<th>First Name</th>
    <th>User Email</th>
	<th>Gender</th>
	<th>Phone</th>
	<th>User Name</th>
	<th>Password</th>
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM ACCOUNTS WHERE Accounts_id=".$_SESSION['sess_user_id'];
   $result_set = mysqli_query($connection, $sql_query) or die($sql_query."<br/><br/>".mysql_error());
 $row=mysqli_fetch_row($result_set)
 
  ?>
        <tr>
		<td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
	
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="images/b_edit.png" alt="Edit" align="EDIT" height="40px" width="40px" /></a></td>
        
        </tr>
        <?php

 ?>
    </table>
	
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="#">Volunteers.</a></th>
    </tr>
	<th>Student ID</th>
	<th>Level </th>
    <th>Major</th>
	<th>Account ID</th>
    <th>Airport Pickup</th>
	<th>Require Housing</th>
	<th>Arriving Flight NR#</th>
	<th>Arriving Date</th>
	<th>Arriving Time</th>
	<th>Pickup Request</th>
	<th>Departing Flight NR#</th>
	<th>Luggage Amount</th>
	<th>Host Address</th>
    <th>Host Contact</th>
	<th>Nights Staying</th>
    </tr>
    <?php
  $sql_query="SELECT * FROM student WHERE Accounts_id=".$_SESSION['sess_user_id'];
   $result_set = mysqli_query($connection, $sql_query) or die($sql_query."<br/><br/>".mysql_error());
 while($row=mysqli_fetch_row($result_set))
 {
  ?>
       <tr>
		<td><?php echo $row[0]; ?></td>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>
		<td><?php echo $row[9]; ?></td>
		<td><?php echo $row[10]; ?></td>
		<td><?php echo $row[11]; ?></td>
		<td><?php echo $row[12]; ?></td>
		<td><?php echo $row[13]; ?></td>
		<td><?php echo $row[14]; ?></td>
	
		<td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="images/b_edit.png" alt="Edit" align="EDIT" height="40px" width="40px" /></a></td>
       </tr>
        <?php
 }
 ?>
    </table>
	
    </div>
</div>
</div>

</center>
</body>
</html>