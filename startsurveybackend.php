<?php
include ("connectdb.php");
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['Gender'];
$household = $_POST['household'];
$religion = $_POST['religion'];
$barangay = $_POST['brgy'];
$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$skullast = $_POST['skullast'];
$skills = $_POST['skills'];
$fathersname = $_POST['fathersname'];
$fage = $_POST['fage'];
$fathersoccu = $_POST['fathersoccu'];
$fathersrelig = $_POST['fathersrelig'];
$mothersname = $_POST['mothersname'];
$mage = $_POST['mage'];
$mothersoccu = $_POST['mothersoccu'];
$mothersrelig = $_POST['mothersrelig'];
$status = $_POST['status'];
$educatt = $_POST['educatt'];
$employed = $_POST['employed'];
$reg = $_POST['reg'];
//$bdate = $month . " " . $day . "," . $year;
$option = $_POST['option1'];
$bdate = $month . " " . $day . "," . $year;
$hawid = $_POST['hawid'];
 
/////////kuha sa controller id 
$file = fopen("controller.txt", "r");
           while (!feof($file)){
            $quesid = trim(fgets($file));

          if(!feof($file)){
                   eval($quesid);  ////////// <----controller question ID;
          }
         }
            fclose($file);

    for($a=0;$a<$hawid;$a++){
        $arr2[$a]= $_POST['option'.$a];   /////<--- pag kuha sa dynamic value sa mga radio buttons!
    }
            
   // print_r($arr2);
            
            
            
mysql_query("insert into test values('$option',(select now()))");

mysql_query("call sp_addyouth('$fname','$mname','$lname','$bdate','$gender','$educatt','$skullast','$skills','$household')");
mysql_query("call sp_addstatus('$status','$employed','$reg')");
mysql_query("call sp_addyouthstatus()");
mysql_query("call sp_addparents('$fathersname','$fage','$fathersrelig')");
mysql_query("insert into tbloccupation values(null,'$fathersoccu')");  // wala na na ko gi stored procedure kai 1 ra ka variable..unsa ko buang? haha
mysql_query("call sp_addfatheroccu()");
mysql_query("call sp_addfatheryp()");
mysql_query("call sp_addparents('$mothersname','$mage','$mothersrelig')");
mysql_query("insert into tbloccupation values(null,'$mothersoccu')");
mysql_query("call sp_addmotheryp()");
mysql_query("call sp_addmotheroccu()");
mysql_query("call sp_addbarangay('$barangay')");
mysql_query("insert into tblsurvey values(null,(select now()))");
mysql_query("insert into tblyouthsurvey values((select max(survey_id) from tblsurvey),(select max(youth_id) from tblyouth))");
mysql_query("insert into tblsurveyquestion values('$quesid',(select max(survey_id) from tblsurvey))");
//mysql_query("insert into tblreference values(null,(select max(survey_id) from tblsurvey),)");

//echo $quesid;
// mag insert nako sa tblreference taas ang process since dynamic ang answers, radiobutton og questions.
$result = mysql_query("select ques_opt_id from tblquesoption where ques_id='$quesid'"); //// <---- gikan sa controller ang value
//$c=0;
while($result1 = mysql_fetch_array($result)) {
        $arr[] = $result1['ques_opt_id'];
   // $c++;
}
$counter =  mysql_num_rows($result);
//print_r($arr);
//print_r($arr2);
//echo "<br>".$counter;
for($x=0;$x<$counter;$x++) {
    mysql_query("insert into tblreference values('',(select max(survey_id) from tblsurvey),'$arr[$x]',(select max(youth_id) from tblyouth),'$arr2[$x]')");
   // echo $arr[$x]. "<br>";
    //echo $arr2[$x]. "<br>";
}



header("location:startsurvey.php"); 

?>
