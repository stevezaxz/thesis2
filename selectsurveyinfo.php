<?php
include('connectdb.php');

$res = mysql_query("select * from tblquestion");
     $x=0;
    while($result = mysql_fetch_array($res)) {
       // echo "<table><tr>";
       // echo $result['ques_description'] ."<br>";
      // echo "<td><input type=\"radio\" name='survey' id='survey' value=".$result['ques_id'] ."></td><td>". $result['ques_description']  ."</tr>";
       echo "<input type=\"radio\" name='survey' id='survey' value=".$result['ques_id'] .">". $result['ques_description']  ."</br>";
      //  echo "<input type=\"radio\" name='survey".$x.  "value=" .$result['ques_id']. "/>". $ralue=".$result['ques_id'] ."></td><td>". $result['ques_description']  ."</tr>";
       $result['ques_description']  ."</br>";
       // $x++;
       
     //  echo "</tr></table>";
    }

?>
