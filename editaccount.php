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
                      <h3>Edit Account</h3>
                   </center>
				</div>
          <form class="form-horizontal" id="form_validation" name="form_validation" action="adduserbackend.php" method="POST">
		  
		  <?php
				$uid = $_POST['edit'];
				
							$result  = mysql_query("select * from tbluser where user_id='$uid'");
					$row = mysql_num_rows($result);
					
					
					if($row!=0) {
					
						for($i=0;$i<$row;$i++) {
							$row1 = mysql_fetch_row($result);
						}
					
						$uname = $row1[1];
						$password = $row1[2];
						$fname = $row1[5];
						$mname = $row1[6];
						$lname = $row1[7];
					
					
					}
							
		        	
				
				?>
				
				
				<input type="hidden" value=<?php echo $uid;?> name="uid">
		  
		  
		  
		  
		  
		  
		  
		  
                  
        <div class="row-fluid">
                <div class="span12">
    <fieldset style="height: 250px;">
	<legend>   <h3>Account Information</h3> </legend>
                            <div class="row-fluid">
                                        <div class="span6">
                                          <label class="control-label">Firstname:</label>
                                                 <div class="controls">
                                                        <input class="input-medium required" type="text" name="fname" id="fname" value=<?php echo $fname; ?>>
                     
                                                 </div>  
                                            
                                            
                                            
                                
                                          <label class="control-label">Middlename:</label>
                                                 <div class="controls">
                                                        <input class="input-medium required" type="text" name="mname" id="mname" value=<?php echo $mname;?>>
                       
                       
                                                 </div>
          
                              
                                         <label class="control-label">Lastname:</label>
                                                     <div class="controls">
                                                        <input class="input-medium required" type="text" name="lname" id="lname" value=<?php echo $lname;?>>
                       
                       
                                                   </div>
                            
      
                                         </div>
                                         <div class="span6">
                        
                            
                                                  <label class="control-label">Username:</label>
                                                         <div class="controls">
                                                             <input class="input-medium required" type="text" name="username" id="username" value=<?php echo $uname;?>>
                       
                       
                                                         </div>
                        
       
                                                 <label class="control-label">Password:</label>
                                                            <div class="controls">
                                                               <input class="input-medium required" type="password" name="password" id="password" value=<?php echo $password;?>>
                       
                       
                                                             </div>
                                                 
                                                 <label class="control-label">User privilege:</label>
                                                            <div class="controls">
                                                               <select name="userpriv" id="userpriv">
                                                                   <option value="MANAGEMENT">MANAGEMENT</option>
                                                                   <option value="PERSONNEL">PERSONNEL</option>
                                                                   <option value="YOUTH">YOUTH</option>
                                                               </select>
                       
                       
                                                             </div>
      
                                         </div>
                             </div>
                </div>
         </div>
                    <center><input type="submit" value="Done" class="btn btn-primary" /> </center>
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