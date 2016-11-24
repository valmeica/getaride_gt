

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
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM accounts WHERE accounts_id=".$_GET['edit_id'];
$result_set = mysqli_query($connection, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data

 $volunteer_id = $_POST['volunteer_id'];
 $accounts_id = $_POST['accounts_id'];
 $affiliation = $_POST['affiliation'];
 $period_preference = $_POST['period_preference'];
 $luggage = $_POST['luggage'];
 $offer_pickup = $_POST['offer_pickup'];
 $offer_housing = $_POST['offer_housing'];
 $pick_up_limit = $_POST['pick_up_limit'];
 $housing_address = $_POST['housing_address'];
 $volunteer_contact = $_POST['volunteer_contact'];
 $nights_offering = $_POST['nights_offering'];
 $max_guests = $_POST['max_guests'];
 $trip_rounds = $_POST['trip_rounds'];
 
 // variables for input data

 // sql query for update data into database
 $sql_query = "UPDATE volunteer SET vlunteer_id='$vlunteer_id', accounts_id='$accounts_id', affiliation='$affiliation', 
 period_preference='$period_preference', luggage='$luggage', offer_pickup='$offer_pickup', offer_housing='$offer_housing', pick_up_limit='$pick_up_limit',
housing_address='$housing_address', volunteer_contact='$volunteer_contact', nights_offering='$nights_offering', max_guests='$max_guests', trip_rounds='$trip_rounds', 
 WHERE Accounts_id=".$_GET['edit_id'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysqli_query($connection, $sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Was Updated Successfully');
  window.location.href='volunteerview.php';
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
 header("Location: volunteerview.php");
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
    <td><input type="text" name="volunteer_id" placeholder="volunteer_id" value="<?php echo $fetched_row['volunteer_id']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="accounts_id" placeholder="accounts_id" value="<?php echo $fetched_row['accounts_id']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="affiliation" placeholder="affiliation" value="<?php echo $fetched_row['affiliation']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="period_preference" placeholder="period_preference" value="<?php echo $fetched_row['period_preference']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="luggage" placeholder="luggage" value="<?php echo $fetched_row['luggage']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="offer_pickup" placeholder="offer_pickup" value="<?php echo $fetched_row['offer_pickup']; ?>" required /></td>
    </tr>
	 <tr>
    <td><input type="password" name="offer_housing" placeholder="offer_housing" value="<?php echo $fetched_row['offer_housing']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="pick_up_limit" placeholder="pick_up_limit" value="<?php echo $fetched_row['pick_up_limit']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="housing_address" placeholder="housing_address" value="<?php echo $fetched_row['housing_address']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="volunteer_contact" placeholder="volunteer_contact" value="<?php echo $fetched_row['volunteer_contact']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="nights_offering" placeholder="nights_offering" value="<?php echo $fetched_row['nights_offering']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="max_guests" placeholder="max_guests" value="<?php echo $fetched_row['max_guests']; ?>" required /></td>
    </tr>
	<tr>
    <td><input type="text" name="trip_rounds" placeholder="trip_rounds" value="<?php echo $fetched_row['trip_rounds']; ?>" required /></td>
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