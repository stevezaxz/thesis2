<?php
include "connectdb.php";
//$arr[] = array(1,2,3);
//$arr2[] = array(1,1,1);
$arr[0] =1;
$arr[1] =2;
$arr[2] =3;

$arr2[0] =1;
$arr2[1] =1;
$arr2[2] =1;

for($x=0;$x<3;$x++) {
   // mysql_query("insert into tblreference values('',(select max(survey_id) from tblsurvey),'$arr[$x]',(select max(youth_id) from tblyouth),'$arr2[$x]')");
   // echo $arr[$x]. "<br>";
    //echo $arr2[$x]. "<br>";
    mysql_query("insert into tblreference values('',(select max(survey_id) from tblsurvey),'$arr[$x]',(select max(youth_id) from tblyouth),'$arr2[$x])");
}

/*$a = $_POST['option1'];
$b = $_POST['option2'];
$c = $_POST['option3'];
$d = $_POST['option4'];
echo $a . $b . $c. $d;*/

?>
