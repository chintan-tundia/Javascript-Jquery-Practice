<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
	#info
	{
		height:20px;
		width:584px;
		background-color:transparent;
		color:#FFFFFF;
		font-weight:bolder;
		font-size:18px;
		text-shadow:1px 1px #300;
		position:absolute;
		display:none;
	}
	body
	{
		overflow:hidden;
	}
</style>
<body bgcolor="#8CBF26">
<br /><br />
	<center>
		<img style="cursor:pointer;border:double 15px #004000" id="img1" src="files/2013-05-19.jpg" height="500" width="700"/>
    </center>
    <div id="info">
	    Whale Rock at Tidal River, Wilsons Promontory National Park,Australasia
    </div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(e){
	$('#img1').mousemove(function(e){
		ypos=e.clientY;
		xpos=e.clientX;
		$('#info').show().css('left',xpos-200).css('top',ypos+10);
	}).mouseout(function(){
		$('#info').hide();
		})
});
</script>
</html>