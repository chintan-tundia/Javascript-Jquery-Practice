<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appendto practice</title>
</head>
<style>
#main	
{
	width:100%;
	height:600px;
}
#cont1
{
	width:40%;
	height:620px;
	float:left;
	//border:black solid thin;
}
#cont3
{
	width:40%;
	height:620px;
	float:left;
	//border:black solid thin;
}
#cont2
{
	width:19%;
	height:620px;
	float:left;
}
img
{
	border:#0080FF thick solid;
}
input[type="button"]
{
	background-color:#0080FF;
	border: #00366C thick solid; 
	border-radius:10%;
	height:40px;
	width:40px;
	color:#FFFFFF;
	font-size:18px;
	font-weight:bold;
}
.selected
{
	border:#FFFF00 thick solid;
}
</style>
<body bgcolor="#E6F9FF">
<div id="main">
	<div id="cont1">

            	<img class="transfer1" src="files/2013-04-30.jpg" height="195" width="250"/>
                <img class="transfer1" src="files/2013-05-01.jpg" height="195" width="250"/>
            	<img class="transfer1" src="files/2013-05-02.jpg" height="195" width="250"/>
                <img class="transfer1" src="files/2013-05-03.jpg" height="195" width="250"/>
            	<img class="transfer1" src="files/2013-05-04.jpg" height="195" width="250"/>
                <img class="transfer1" src="files/2013-05-05.jpg" height="195" width="250"/>
            
    </div>
    <div id="cont2">
    	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    	<center>
        	<input id="but1" type="button" value=">"/>
            <br /><br />
    		<input id="but2" type="button" value=">>"/>
            <br /><br /><br /><br />
            <input id="but3" type="button" value="<"/>
            <br /><br />
            <input id="but4" type="button" value="<<"/>
        </center>
    </div>
    <div id="cont3">
    	
    </div>
</div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
function transa(classfrom,classto,traclass)
{
	$('.'+classfrom+':first').appendTo('.'+classto);
	$('.'+classto +' .'+classfrom).attr('class',traclass);
}

function trans1(classfrom,classto,traclass)
{
	$('.'+classfrom).appendTo('#'+classto);

}
	$(document).ready(function(e){
		$('#cont1 .transfer1').click(function(){
			$('.transfer1').removeClass('selected');
			$(this).addClass('selected');
		})
		$('#cont3 .transfer1').click(function(){
			$('.transfer1').removeClass('selected');
			$(this).addClass('selected');
		})
        $('#but1').click(function(){
			trans1('selected','cont3','transfer2');
		})
        $('#but2').click(function(){
			$('#cont1 .transfer1').each(function (){
				trans1('transfer1','cont3','transfer2');	
			});
		})
	    $('#but3').click(function(){
			trans1('selected','cont1','transfer1');
		})
        $('#but4').click(function(){
			$('#cont3 .transfer1').each(function (){
				trans1('transfer1','cont1','transfer2');	
			});
		})
    });
</script>
</html>