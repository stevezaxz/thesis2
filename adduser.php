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
                      <h3>Add User</h3>
                   </center>
				</div>
          <form class="form-horizontal" id="form_validation" name="form_validation" action="adduserbackend.php" method="POST">
                  
        <div class="row-fluid">
                <div class="span12">
    <fieldset style="height: 250px;">
	<legend>   <h3>User Information</h3> </legend>
                            <div class="row-fluid">
                                        <div class="span6">
                                          <label class="control-label">Firstname:</label>
                                                 <div class="controls">
                                                        <input class="input-medium required" type="text" name="fname" id="fname">
                       
                       
                                                 </div>  
                                            
                                            
                                            
                                
                                          <label class="control-label">Middlename:</label>
                                                 <div class="controls">
                                                        <input class="input-medium required" type="text" name="mname" id="mname">
                       
                       
                                                 </div>
          
                              
                                         <label class="control-label">Lastname:</label>
                                                     <div class="controls">
                                                        <input class="input-medium required" type="text" name="lname" id="lname">
                       
                       
                                                   </div>
                            
      
                                         </div>
                                         <div class="span6">
                        
                            
                                                  <label class="control-label">Username:</label>
                                                         <div class="controls">
                                                             <input class="input-medium required" type="text" name="username" id="username">
                       
                       
                                                         </div>
                        
       
                                                 <label class="control-label">Password:</label>
                                                            <div class="controls">
                                                               <input class="input-medium required" type="password" name="password" id="password">
                       
                       
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