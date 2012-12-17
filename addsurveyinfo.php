<?php
include('connectdb.php');

$question = $_POST['question'];
$counter = $_POST['counter'];
//$option1 = $_POST['option1'];
    for($x=0;$x<$counter;++$x) {
        $s[] = $_POST['option'.$x];
        
    }

  if(mysql_query("insert into tblquestion values(null,'$question')")) 
      echo "Question Successfuly Added";
 
  else echo "Something went wrong";
  //mysql_query("insert into test values('$s[1]')");
  
  for($y=0;$y<$counter;$y++) {
      mysql_query("insert into tbloption values(null,'$s[$y]')");
      mysql_query("insert into tblquesoption values(null,(select max(ques_id) from tblquestion),(select max(option_id) from tbloption))");
  }
  
  // mysql_query("insert into test values('$counter')");
?>
