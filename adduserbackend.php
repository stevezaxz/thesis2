<?php
include('connectdb.php');
$fname = $_POST['fname'];
$lname= $_POST['lname'];
$mname = $_POST['mname'];
$username = $_POST['username'];
$privilege = $_POST['userpriv'];
$password = $_POST['password'];
//echo $fname . " " . $lname . " " . $mname . " " . $username . " " . $privilege;

 mysql_query("insert into tbluser values('','$username','$password','ACTIVE','$privilege','$fname','$mname','$lname')");
//echo $res;

header('location:home.php');

?>
