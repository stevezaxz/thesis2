<html>
    
    <form action="radiocheck.php" method='post' >

<?php

include 'connectdb.php';
$res ="";
    $a="";
       $file = fopen("controller.txt", "r");
           while (!feof($file)){
            $quesid = trim(fgets($file));

          if(!feof($file)){
                   eval($quesid);
          }
         // $GLOBALS['res'] = mysql_query("select a.ques_id, a.ques_description,b.option_description from tblquestion as a, tbloption as b, tblquesoption as c where a.ques_id=c.ques_id and b.option_id=c.option_id and a.ques_id='$quesid'");

           }mysql_affected_rows();
     //  echo $quesid;
           fclose($file);

          // echo $quesid;
           $res = mysql_query("select a.ques_id, a.ques_description,b.option_description from tblquestion as a, tbloption as b, tblquesoption as c where a.ques_id=c.ques_id and b.option_id=c.option_id and a.ques_id='$quesid'");
           $x=0;
           $res1 = mysql_query("select a.ques_id, a.ques_description,b.option_description from tblquestion as a, tbloption as b, tblquesoption as c where a.ques_id=c.ques_id and b.option_id=c.option_id and a.ques_id='$quesid'");
           
           $questitle="";
             while($result = mysql_fetch_array($res)) {
                $questitle = $result['ques_description'] . "</br>";
                 $x++;
          //       break;
              }
             $a=0;
                echo "<table>";
              while($result = mysql_fetch_array($res1)) {
                  //echo $result['option_description'];
                  
                 echo "<tr>";
                    
                  echo "<td>". $result['option_description']. "</td>";
                  echo "<td>";
                            for($y=0;$y<$x;$y++){
                                    echo "<input type=\"radio\" name='option".($a+1). "' id='option".($a+1). "' value=".($y+1)." />";
                            }
                  echo "</td>";
                  echo "</tr>";
                  $a++;
              }
              
              echo "<input type='hidden' id='hawid' name='hawid' value=".($a+1).">";
   //         $s=   mysql_affected_rows();
           
             // echo $questitle . $x;
             
             
             ?>
        
        <input type="submit" name="action" >
        
    </form>
    </html>
    