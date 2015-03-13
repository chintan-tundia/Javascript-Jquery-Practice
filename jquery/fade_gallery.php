<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>

<body bgcolor="black">
<table align="center" border="1">
    <tr>
    	<td><img class="fadeto" src="files/2013-05-07.jpg" height="300" width="400"/></td>
        <td><img class="fadeto" src="files/2013-05-08.jpg" height="300" width="400"/></td>
        <td><img class="fadeto" src="files/2013-05-06.jpg" height="300" width="400"/></td>
    </tr>
    <tr>
    	<td><img class="fadeto" src="files/2013-05-10.jpg" height="300" width="400"/></td>
        <td><img class="fadeto" src="files/2013-05-01.jpg" height="300" width="400"/></td>
        <td><img class="fadeto" src="files/2013-05-19.jpg" height="300" width="400"/></td>
    </tr>    
</table>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(e) {
        $('.fadeto').mouseover(function(){
			//$('.fadeto').fadeTo(100,0.4);
			$(this).fadeTo(100,1,function(){
				$('.fadeto').not(this).fadeTo(100,0.4);
			})
		})
    });	
</script>
</html>