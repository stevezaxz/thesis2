<?php
session_start();
include('connectdb.php');

if(isset($_POST['action'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		
		$result  = mysql_query("select user_name,password,status,user_privilege,user_id,fname,lname from tbluser where user_name='$login' AND password='$password'");
		$row = mysql_num_rows($result);
		
		
		if($row!=0) {
		
			for($i=0;$i<$row;$i++) {
				$row1 = mysql_fetch_row($result);
			}
		
		
			if($login==$row1[0] && $password==$row1[1] && $row1[2]=="ACTIVE") {
					if($row1[3]=="MANAGEMENT") {
							$_SESSION['uid'] = $row1[4];
							$_SESSION['name'] = $row1[5] . " " . $row1[6];
                                                        
							header("location:home.php"); ///REDIRECT TO HOME
						//	echo $row1[3];
							}
					
					if($row1[3]=="RESPONDENT") {
							$_SESSION['uid'] = $row1[4];
							$_SESSION['name'] = $row1[5] . " " . $row1[6];
							header("location:homeres.php"); ///REDIRECT TO HOME
					}
					
					if($row1[3]=="PERSONNEL") {
							$_SESSION['uid'] = $row1[4];
							$_SESSION['name'] = $row1[5] . " " . $row1[6];
							header("location:homeper.php"); ///REDIRECT TO HOME
						
					}
					
					
					
			}
			
			else {
				echo "Erroe2";
			}
		
		}
		
		else {
				
				header("location:relogman.php");
				
				
		}
		
		
}
else {

header("location:index.php");
}






?>


