<!DOCTYPE html>
<html>
    <?php 
    include 'connectdb.php';
    include('tabs-pills.html');
  
    //include('start.html');

    ?>
    <title>Youth Development Program</title> 

    <head>
         <script type="text/javascript" src="js/jquery-1.6.1.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
      
        
        
        <style type="text/css">
                label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
                p { clear: both; }
                .submit { margin-left: 12em; }
                em { font-weight: bold; padding-right: 1em; vertical-align: top; }
        </style>
  <script>
  $(document).ready(function(){
    $("#form_validation").validate();
  });
  </script>
        
    </head>   
    
    
    
<link href="css/bootstrap.css" rel="stylesheet"> 

<body style="background: url(img/retro.jpg);">

        <div class="container" style='margin-top: 60px;' position: relative;>
               <div class="hero-unit">  
			   <div class="head">
                   <center>
                      <h3>Choose Survey Question</h3>
                   </center>
				</div>
          <form class="form-horizontal" id="choosesurvey" name="choosesurvey" action="choosesurvey2.php"  method="POST">
                  
        <div class="row-fluid">
                <div class="span12">
    <fieldset style="height: 250px;">
	<legend>   <h3>Choose Survey:</h3> </legend>
                            <div class="row-fluid">
                                        <div class="span">
                                            <?php
                                                    $res1 = mysql_query("select * from tblquestion");
                                                        echo "<table>";
                                                        
                                                     while($result = mysql_fetch_array($res1)) {
                                                         echo "<tr>";
                                                         echo "<td><input type=\"radio\" name='survey' id='survey' value=".$result['ques_id'] ."></td><td>". $result['ques_description']  ."</tr>";
                                                         
                                                         echo "</tr>";
                                                     }
                                                        echo "</table>";
                                                    
                                                    
                                            
                                            ?>
                                            
                                            
                              
                                        </div>
                </div>
         </div>
                    <center><input type="submit" value="Register" class="btn btn-primary" /> </center>
            </form>
                   
                 
                   
            </div>
        </div>
    
    
   
    
    
    
    
    
    
    
    
</body>


<div class="footer">
      <footer>
        <center><p>&copy; 2012 &nbsp; Community Improvement Division</p></center>
      </footer>
</div>
</html>