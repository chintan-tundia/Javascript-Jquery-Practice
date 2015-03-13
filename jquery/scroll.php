<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
	#bigbox
	{
		height:500px;
		width:700px;
		float:left;
	}
	#ball
	{
		height:100px;
		width:100px;
		background-color:#A80000;
		border-radius:100%;
	}
	#box
	{
		height:500px;
		width:700px;
		border:black thin solid;
		overflow:hidden;
		margin-left:auto;
		margin-right:auto;
	}
	#scr1
	{
		overflow-x:scroll;
		height:12px;
		width:720px;
		cursor:pointer;
		margin-top:5px;
		margin-left:auto;
		margin-right:auto;
	}
	#scr2
	{
		overflow-y:scroll;
		height:520px;
		width:12px;
		cursor:pointer;
		float:left;
		margin-left:7px;
	}
	#size
	{
		background-color:#0099FF;
		height:10px;
		width:10px;
		float:left;
		margin-left:5px;
	}
</style>
<body>
<div id="bigbox">
<div id="box">
<div id="ball"></div>
</div>
<div id="scr1"><div style="height:100px;width:1303px;background-color:#00FF00;"></div></div>
</div>
<div id="scr2"><div style="height:903px;width:1083px;background-color:#00FF00;"></div></div>
<br />
<div id="size"></div>

</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function() {
	 $('#scr1').scroll(function(){
		 scroll_val=$('#scr1').scrollLeft()
		 //$('#ball').css('background-color','#'+scroll_val);
		 $('#ball').css('margin-left',scroll_val); 
		 scroll_val=eval(scroll_val+10)
		 //$('#size').css('width',scroll_val); 
	 });
	 $('#scr2').scroll(function(){
		 scroll_val=$('#scr2').scrollTop()
		 //$('#ball').css('background-color','#'+scroll_val);
		 $('#ball').css('margin-top',scroll_val); 
		 scroll_val=eval(scroll_val+100)
		 //$('#size').css('height',scroll_val); 
	 });
});
</script>
</html>