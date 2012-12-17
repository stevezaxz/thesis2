$("#okbtn").click( function() {
	
        var x = $("#opt").val();
	var i;
	var htmlstring = "";
	for( i=0; i<x;i++) {
		var option = "option";
		var option1 = option +i;
		htmlstring += "Option "+ (i+1) +": <input class='input-large' type='text' name="+option1+" id="+option1+"> </br>";
                ///// dynamic na pag add sa mga input box na part
	}
        htmlstring+="<input type='hidden' name='counter' id='counter' value="+i+">"
	$("#dynamicopt").html(htmlstring);
	
	//alert(x);

});
/////////////////////////////////////////
///////////////////////////////////////
$("#save").click( function() {
   // var data = "asdadas";
    //var data = $("#question").val();

  var data = $("#addquestion :input").serializeArray();
    $.post( $("#addquestion").attr("action"),data, function(info) { $("#result").html(info).fadeOut(3000) });
        ////pag kuha sa mga values sa dynamic input box
    $("$result").val("");
});
   
/////////////////
/////////////////
$("#addquestion").submit( function() {
    return false;  
});

/////Question
/*$("#chooseako").click( function() {
    if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("dynamicselect").innerHTML=xmlhttp.responseText;
    }
  }
   xmlhttp.open("POST","selectsurveyinfo.php",true);
xmlhttp.send();
   
   //alert("asdas");
}); */

/*$("#done").click( function() {
   var a= $("#test").val();
   
   alert(a);
}); */
