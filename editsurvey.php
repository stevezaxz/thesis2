<?php
include('tabs-pills.html');


?>
<html>
<head>
    <title>Survey Information</title>
<link href="css/bootstrap.css" rel="stylesheet"> 
</head>
<body style="background: url(img/retro.jpg);">


					<div class="container" style='padding-top: 60px;'>
						<div class="hero-unit">  
							  <div class="head">
									   <center>
										  <h3>Survey Informations</h3>
									   </center>
									</div>
									
						
								
								  
			
								
			<ul class="thumbnails">  
						
						<li class="span4">  
								<div class="thumbnail" >
								<img src="img/d.png" style="float: center;">  
									
								<div class="caption">  
									<div class="b" style="padding-bottom: 24px;">
							
							<a data-toggle="modal" href="#addsurvey" class="btn btn-success btn-large"><i class="icon-plus"></i>Add Survey</a>
											<span id="result"></span>
									</div>
								 </div>  
							   </div>  
						</li>  
						
						
						<li class="span4">  
						
									<div class="thumbnail">  
									
							<img src="img/choose.png" style="float: center;">  
							
							<div class="caption">  
							 
							 <div class="b" style="padding-bottom: 24px;">
							
							<a href="choosesurvey.php" class="btn btn-success btn-large" name="chooseako" id="chooseako"><i class="icon-check"></i>Choose Survey</a>
						

						</div>
					
							 </div>  
						   </div>  
						 </li>  
						 
						 <li class="span4">  
						
									<div class="thumbnail">  
									<img src="img/editinfo.png" style="float: center;">  
							
							<div class="caption">  
							 
							 <div class="b" style="padding-bottom: 24px;">
							
							<a data-toggle="modal" href="#edit" class="btn btn-success btn-large"><i class="icon-pencil"></i>Edit Survey</a>
						

							</div>
					
							 </div>  
						   </div>  
						 </li>  
			</ul>  
								
								 
											
				
					
        
          <div id="addsurvey" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
		   <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Type Survey Question</h3>
            </div>
           
		   <div class="modal-body">
                       
                               
                        
                          <form name="addquestion" id="addquestion" action="addsurveyinfo.php" method="POST">
                               <textarea name="question" id="question"></textarea>
                                    <div id="dynamicopt">



                                    </div>
                          </form>
                        
                       <label>How many Option?</label>
			  <input class="input-medium" name="opt" id="opt" type="text" placeholder="" />
                          <button class="btn btn-small btn-primary" name="okbtn" id="okbtn">OK</button><br>
			
			</div>
           
		   <div class="modal-footer">
              <button class="btn" data-dismiss="modal" area-hidden="true">Close</button>
              <button class="btn btn-primary" data-dismiss="modal" area-hidden="true" id="save" name="save">Save</button>
             
            </div>
        

		</div>
          
				<div id="choose" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
		   <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Select Survey</h3>
            </div>
           
		   <div class="modal-body">
              <form action="selectsurveyinfo.php" name="selectsurvey" id="selectsurvey">
                           <div id="dynamicselect" >
                               
                               
                               
                           </div>
                               
                                                     
                           
                       </form>
            </div>
           
		   <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary" name="done" id="done" >Done</button>
            </div>
        

		</div>
		
		
		
				<div id="edit" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
           
		   <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 id="myModalLabel">Edit Survey</h3>
            </div>
           
		   <div class="modal-body">
              <h3> naay edit ? hehe.</h3>
            </div>
           
		   <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Cancel</button>
              <button class="btn btn-primary">Done</button>
            </div>
        

		</div>
								  
								  </div>    
								
</div>
</div>
					
</body>

<div class="footer">
      <footer>
        <center><p>&copy; Community Improvement Division &nbsp; 2012 </p></center>
      </footer>
</div>


<!--para ni xa sa MODAL-->
<script src="js/jquery.js"></script>
 <script src="js/bootstrap-modal.js"></script>
 <script src="js/modaldynamic.js."></script> 
 <!--<script>
 $("#okbtn").click( function() {
	var x = $("#opt").val();
	var htmlstring = "";
	
	for(var i=0; i<x;i++) {
		
		htmlstring += "<input class='input-medium' type='text' name='i'>";
	
	}
	$("#dynamicopt").html(htmlstring);
	
	//alert(x);

});
 
 
 </script> -->
 
 
 
 
 
</html>