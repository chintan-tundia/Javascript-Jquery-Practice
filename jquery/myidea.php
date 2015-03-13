<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Myidea</title>
</head>
<style>
*
{
		margin:0px;
}
.tinybox
{
	height:10px;
	width:10px;
	float:left;
	margin:2px;

}
</style>
<body>

<div id="main">
	<?php	
		    
			for($i=0;$i<500;$i++)
			{
				
				
				echo"<div class='tinybox' style='background-color:rgba(100,100,100,".($i%9).")'></div>";
				
			}
		
	?>
</div>

</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(e) {
		wheight=$(window).innerHeight();
		wwidth=$(window).innerWidth();
        $('#main').css('height',wheight);
        $('#main').css('width',wwidth);		
		//$('#main').css('background-color','red');		
    });
</script>
</html>