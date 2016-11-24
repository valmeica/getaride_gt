<?php 
	require 'database-config.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['username'])){
		$username = $_POST['username'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];

	}
	
	echo $username ." : ".$password;

	$q = 'SELECT * FROM ACCOUNTS WHERE username=:username AND password=:password';

	$query = $dbh->prepare($q);

	$query->execute(array(':username' => $username, ':password' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['Accounts_id'];
		$_SESSION['sess_username'] = $row['username'];
        $_SESSION['sess_userrole'] = $row['role'];

        echo $_SESSION['sess_userrole'];
		session_write_close();

		if( $_SESSION['sess_userrole'] == 1){
			 session_start();
          $_SESSION['logon'] = true;
			header('Location: adminview.php');
			die();
		} else if ($_SESSION['sess_userrole'] == 2){
		
			 session_start();
          $_SESSION['logon'] = true;
			header('Location: Volunteerview.php');
			die();
		}else{
			session_start();
          $_SESSION['logon'] = true;
			header('Location: studentview.php');
			die();
		}
		
		
	}

//This function returns True if auth level = '3'
//Otherwise it returns False
/*function CheckAccess()
{
    $result = (isset($_SESSION['sess_userrole']) &&  $_SESSION['sess_userrole'] == 1 );

    if(!$result)
    {
        header('WWW-Authenticate: Basic realm=“Test restricted area”');
        header('HTTP/1.0 401 Unauthorized');
        return false;
    }
    else
    {
        header("location: adminview.php");
    }
}*/
	
?>