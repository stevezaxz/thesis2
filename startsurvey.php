<!DOCTYPE html>
<html>

<?php
include('tabs-pills.html');
include('connectdb.php');
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
    $("#form_validation").validate( {
        rules: {
            fage: {
                digits:true
            },
            mage: {
                digits:true
            },
            household: {
                digits:true
            }
        }
        
        
    }


    );
  });
 

  
  
  
  
  </script>
        
 
    </head>   
    
   
<link href="css/bootstrap.css" rel="stylesheet"> 

<body style="background: url(img/retro.jpg);">

        <div class="container" style='margin-top: 60px;' position: relative;>
               <div class="hero-unit">  
                  <div class="head">
                   <center>
                      <h3>Survey Form</h3>
                   </center>
				</div>
				   
                   <form class="form-horizontal" id="form_validation" name="form_validation" action="startsurveybackend.php" method="POST">
                      <fieldset>
				<legend> Personal Information</legend> 
                       <div class="row-fluid">
                <div class="span12">
				
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
                            
                                         <label class="control-label">Gender:</label>
                                            <div class="controls">
                                                <input type="radio" value="Male" checked name="Gender" id="Gender">
                                                Male
                                                <input type="radio" value="Female" checked name="Gender" id="Gender">
                                                Female
                                            
                                            </div>
                                         
                                         
                                         
                                         
                                         
                                         
                                         </div> <!-- ENDING LEFT SIDE CONTENT YOUTH INFORMATION-->
                                         <div class="span6">
                        
                            
                                                  <label class="control-label">Household no.:</label>
                                                         <div class="controls">
                                                             <input class="input-medium required" type="text" name="household" id="household">
                       
                       
                                                         </div>
                        
       
                                                 <label class="control-label">Religion:</label>
                                                            <div class="controls">
                                                               <input class="input-medium required" type="text" name="religion" id="religion">
                       
                       
                                                             </div>
                                                 
                                                 <label class="control-label">Barangay:</label>
                                                            <div class="controls">
                                                               <select name="brgy" class="brgy" id="brgy" name="brgy">
                                                                    <option value="Agusan">Agusan</option>
                                                                    <option value="Baikingon">Baikingon</option>
                                                                    <option value="Balubal">Balubal</option>
                                                                    <option value="Balulang">Balulang</option>
                                                                    <option value="Bayabas">Bayabas</option>
                                                                    <option value="Bayanga">Bayanga</option>
                                                                    <option value="Besigan">Besigan</option>
                                                                    <option value="Bonbon">Bonbon</option>
                                                                    <option value="Bugo">Bugo</option>
                                                                    <option value="Bulua">Bulua</option>
                                                                    <option value="Camaman-an">Camaman-an</option>
                                                                    <option value="Canitoan">Canitoan</option>
                                                                    <option value="Carmen">Carmen</option>
                                                                    <option value="Consolacion">Consolacion</option>
                                                                    <option value="Cugman">Cugman</option>
                                                                    <option value="Dansolihon">Dansolihon</option>
                                                                    <option value="F.S Catanico">F.S Catanico</option>
                                                                    <option value="Gusa">Gusa</option>
                                                                    <option value="Indahag">Indahag</option>
                                                                    <option value="Iponan">Iponan</option>
                                                                    <option value="Kauswagan">Kauswagan</option>
                                                                    <option value="Lapasan">Lapasan</option>
                                                                    <option value="Lumbia">Lumbia</option>
                                                                    <option value="Macabalan">Macabalan</option>
                                                                    <option value="Macasandig">Macasandig</option>
                                                                    <option value="Mambuaya">Mambuaya</option>
                                                                    <option value="Nazareth">Nazareth</option>
                                                                    <option value="Pagalungan">Pagalungan</option>
                                                                    <option value="Pagatpat">Pagatpat</option>
                                                                    <option value="Pigsag-an">Pigsag-an</option>
                                                                    <option value="Puerto">Puerto</option>
                                                                    <option value="San Simon">San Simon</option>
                                                                    <option value="Tablon">Tablon</option>
                                                                    <option value="Taglimao">Taglimao</option>
                                                                    <option value="Tagpangi">Tagpangi</option>
                                                                    <option value="Tignapoloan">Tignapoloan</option>
                                                                    <option value="Tuburan">Tuburan</option>
                                                                    <option value="Barangay 1">Barangay 1</option>
                                                                    <option value="Barangay 2">Barangay 2</option>
                                                                    <option value="Barangay 3">Barangay 3</option>
                                                                    <option value="Barangay 4">Barangay 4</option>
                                                                    <option value="Barangay 5">Barangay 5</option>
                                                                    <option value="Barangay 6">Barangay 6</option>
                                                                    <option value="Barangay 7">Barangay 7</option>
                                                                    <option value="Barangay 8">Barangay 8</option>
                                                                    <option value="Barangay 9">Barangay 9</option>
                                                                    <option value="Barangay 10">Barangay 10</option>
                                                                    <option value="Barangay 11">Barangay 11</option>
                                                                    <option value="Barangay 12">Barangay 12</option>
                                                                    <option value="Barangay 13">Barangay 13</option>
                                                                    <option value="Barangay 14">Barangay 14</option>
                                                                    <option value="Barangay 15">Barangay 15</option>
                                                                    <option value="Barangay 16">Barangay 16</option>
                                                                    <option value="Barangay 17">Barangay 17</option>
                                                                    <option value="Barangay 18">Barangay 18</option>
                                                                    <option value="Barangay 19">Barangay 19</option>
                                                                    <option value="Barangay 20">Barangay 20</option>
                                                                    <option value="Barangay 21">Barangay 21</option>
                                                                    <option value="Barangay 22">Barangay 22</option>
                                                                    <option value="Barangay 23">Barangay 23</option>
                                                                    <option value="Barangay 24">Barangay 24</option>
                                                                    <option value="Barangay 25">Barangay 25</option>
                                                                    <option value="Barangay 26">Barangay 26</option>
                                                                    <option value="Barangay 27">Barangay 27</option>
                                                                    <option value="Barangay 28">Barangay 28</option>
                                                                    <option value="Barangay 29">Barangay 29</option>
                                                                    <option value="Barangay 30">Barangay 30</option>
                                                                    <option value="Barangay 31">Barangay 31</option>
                                                                    <option value="Barangay 32">Barangay 32</option>
                                                                    <option value="Barangay 33">Barangay 33</option>
                                                                    <option value="Barangay 34">Barangay 34</option>
                                                                    <option value="Barangay 35">Barangay 35</option>
                                                                    <option value="Barangay 36">Barangay 36</option>
                                                                    <option value="Barangay 37">Barangay 37</option>
                                                                    <option value="Barangay 38">Barangay 38</option>
                                                                    <option value="Barangay 39">Barangay 39</option>
                                                                    <option value="Barangay 40">Barangay 40</option>
                                                                    </select>
                       
                       
                                                             </div>
											<label class="control-label"> Birthdate: </label>
                                            <div class="controls">
                                                        <select  class="month" name="month" id="month" style="width: 110px;">
                                                                   <option value="January">January</option>
                                                                   <option value="February">February</option>
                                                                   <option value="March">March</option>
                                                                   <option value="April">April</option>
                                                                   <option value="may">May</option>
                                                                   <option value="June">June</option>
                                                                   <option value="July">July</option>
                                                                   <option value="August">August</option>
                                                                   <option value="September">September</option>
                                                                   <option value="October">October</option>
                                                                   <option value="November">November</option>
                                                                   <option value="December">December</option>
                                                           </select>  
                                                       
                                                            <select name="day" id="day" style="width: 60px;">
                                                                <?php
                                                                for($i=1;$i<32;$i++){
                                                                echo "<option value=$i>$i</option>";
                                                                }
                                                                ?>
                                                                </select>
													
                                                            <select name="year" id="year" style="width: 85px;">
                                                            <?php
                                                            for($i=1983;$i<2030;$i++){
                                                            echo "<option value=$i>$i</option>";
                                                            }
                                                            ?>
                                                            </select>

                                            </div>
      
                                         </div> <!-- ENDING RIGHT SIDE CONTENTS -->
                           
                                         
                          
                                           
                            
                            
                            </div>
                </div>
         </div>
		   </fieldset>
                        
            <fieldset>
					  <legend>Parents Information </legend>
                         
                         <div class="row-fluid">
                             <div class="span12">
                                 <div class="row-fluid">
                                     <div class="span6">
                                         <label class="control-label">Fathers Name: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="fathersname" id="fathersname">
                                      </div>
									   <label class="control-label">Age: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="fage" id="fage">
                                      </div>
									   <label class="control-label">Occupation: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="fathersoccu" id="fathersoccu">
                                      </div>
									   <label class="control-label">Religion: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="fathersrelig" id="fathersrelig">
                                      </div>
     
                                         
                                     </div>
									<div class="span6">
                                         <label class="control-label">Mothers Name: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="mothersname" id="mothersname">
                                      </div>
									   <label class="control-label">Age: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="mage" id="mage">
                                      </div>
									   <label class="control-label">Occupation: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="mothersoccu" id="mothersoccu">
                                      </div>
									   <label class="control-label">Religion: </label>
                                      <div class="controls">
											<input class="input-medium required" type="text" name="mothersrelig" id="mothersrelig">
                                      </div>
                       
                                     </div>

                                     
                                     
                                     
                                 </div>
                                 
                                 
                                 
                             </div>

                             
                         </div>

                         </fieldset>
                      <fieldset>
					  <legend> Additional Information </legend>
                         
                         <div class="row-fluid">
                             <div class="span12">
                                 <div class="row-fluid">
                                     <div class="span6">
                                         <label class="control-label">Status:</label>
                                            <select name="status" id="status" style="width: 180px";>
                                                <option value="OSY">Out of School youth </option>
                                                <option value="ISY">In School youth</option>
                                            </select>

											<label class="control-label" style="margin-left: -1px;">Educational Attainment: </label>
														<select class="educatt" name="educatt" style="width: 160px;">
														<option value="Elementary">Elementary Level</option>
														<option value="High School">High School Level</option>
														<option value="College">College Degree</option>
														<option value="Vocational">Vocational</option>
														</select>
											
											<label class="control-label" style="margin-left:-1px">Last School Attended: </label>
                                                                                        <div class="controls">
                                                                                            <input type="text" class="input-medium required" name="skullast" id="skullast">
                                                                                            
                                                                                        </div>
                                                                                         
                                                                                        <label class="control-label" style="margin-left:-1px">Skills: </label>
                                                                                        <div class="controls">
                                                                                            <input type="text" class="input-medium required" name="skills" id="skills">
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                     
                                                                                    </div>
                                     
                                                                                         
                                                                                        
                                     
											 <div class="span6">
											 <label class="control-label">Employed:  </label>
                                            <div class="controls">
                                                <input type="radio" value="Employed" checked name="employed" id="employed">
                                                Yes
                                                <input type="radio" value="Not Employed" checked name="employed" id="employed">
                                                No
                              
                                            </div>
											<label class="control-label" style="margin-left: -180px;">Registered Voter: </label>
                                            <div class="controls">
                                                <input type="radio" value="Registered" checked name="reg" id="reg">
                                                Yes
                                                <input type="radio" value="Not Registered" checked name="reg" id="reg">
                                                No
                                            
                                            </div>
											
															    
                                     </div>
                                     
                                     
                                     
                                 </div>
                                 
                                 
                                 
                             </div>
                               
    
                             
                         </div>
                         
                         
                         
                         </fieldset>
                         
                         
                          <fieldset>
					  <legend> Remarks </legend>
                         
                         <div class="row-fluid">
                             <div class="span12">
                                 <div class="row-fluid">
                                     <div class="span6">
                                         <form  method="POST">
                                             
                                             
                                        
                                        <?php
                                                 include 'surveydisplay.php';
                                         
                                         ?>
                                           
                          </form>
                         </div>
						 </div>
						 </div>
						 </div>
                         
                        </fieldset>
                         
                       <input type="submit" value="Submit" class="btn btn-primary" />
                 
                   </form> 
                  
                    
                   
            </div>
        </div>
</body>

<div class="footer">
      <footer>
        <center><p>&copy; 2012 &nbsp; Community Improvement Division</p></center>
      </footer>
</div>

<script>
    $("#action").click( function() {
   var a= $("#option1").val();
   
   alert(a);
});



</script>




</html>