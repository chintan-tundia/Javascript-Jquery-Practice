<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
	#curtain
	{
		background-image:url(files/RedCurtain01.jpg);
		height:490px;
		width:900px;
		border-radius:0% 0% 10% 10%;
	}
	#back
	{
		background-color:black;
		height:500px;
		width:900px;
		background-image:url(files/2013-06-04.jpg);
		background-size:cover;
		border-left:#A80000 10px ridge;
		border-right:#A80000 10px ridge;		
	}
</style>
<body bgcolor="#000000">
<center>
	<audio id="clap" src="files/applause-2.mp3" hidden="true"></audio>
	<div id="back">
	<div id="curtain"></div>
    </div>
    <br />
    <div style="margin-left:auto;margin-right:auto; height:60px;width:140px;background-color:#000;">
    <div id="but1" class="but" style="margin-right:20px;border-radius:100%;background-color:#00FF00;float:left; border:#006600 thick solid;height:50px;width:50px;cursor:pointer;color:#006600;line-height:50px">Up</div>
    <div id="but2" class="but" style="border-radius:100%;background-color:#FF0000;float:left; border:#620000 thick solid;height:50px;width:50px;color:#620000;cursor:pointer;line-height:50px">Down</div>
    </div>
    <p style="color:white;"></p>
</center>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('#but1').click(function(){
			$('#clap')[0].play();
			$('#curtain').slideUp(3000);
		})
		$('.but').mousedown(function(){
			$('#clap')[0].pause();
			$('#clap')[0].currentTime=0;
			$(this).css('height','45');
			$(this).css('width','45');
		})
		$('.but').mouseup(function(){
			$(this).css('height','50');
			$(this).css('width','50');
		})
		$('#but2').click(function(){
			$('#clap')[0].play();
			$('#curtain').slideDown(3000);
		})	
	});
</script>
</html>
