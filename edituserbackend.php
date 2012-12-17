<?php
session_start();
include('connectdb.php');

//if(isset($_POST['action'])) {
	if($_POST['action']=="Submit") {
			$uname = $_POST['uname'];
			$password = $_POST['password'];
			$userpriv = $_POST['userpriv'];
			$status = $_POST['status'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			
			$uid = $_POST['uid'];
			
			//echo $uid;
			$res = mysql_query("update tbluser set user_name='$uname',password = '$password',status= '$status',user_privilege='$userpriv',fname='$fname',mname='$mname',lname='$lname' where user_id=$uid");
			
			header('location:home.php');
			
	
		}

	if($_POST['action']=="Done") {
			
			
			$uid = $_SESSION['uid'];
			$uname = $_POST['uname'];
			$password = $_POST['password'];
			$userpriv = $_POST['userpriv'];
			
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			//echo  $uid . $uname . $password . $userpriv . $fname . $mname . $lname;
			$res = mysql_query("update tbluser set user_name='$uname',passwrd = '$password',status= 'ACTIVE',user_privilege='$userpriv',ufname='$fname',umname='$mname',lname='$lname' where user_id=$uid");
			
			header('location:home.php');
			
			
			
		}
		
	
		
/*	}

else {
	echo "Injection Detected";
}*/


?>