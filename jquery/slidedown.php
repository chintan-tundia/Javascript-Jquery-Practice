<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
	body
	{
		margin:0px;
	}
	.bar1
	{
		margin-left:auto;
		margin-right:auto;
		display:none;
		height:65px;
		width:100%;
		background-color:#000000;
		opacity:0.6;
	}
	
</style>
<body>
		<div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
        <div class="bar1"></div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function() {
	inc=9;
    $('.bar1').each(function(index, element) {
	   $(this).slideDown(5000,'linear');
	   inc=inc+8;
	   xcol='#F0'+inc+'0F';
	   $(this).css('background-color',xcol);
	   
    });
	
});
</script>
</html>