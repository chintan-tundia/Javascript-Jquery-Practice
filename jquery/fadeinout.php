<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dropdown</title>
</head>
<style>
	body
	{
			background-image:url(files/wood_texture_1.jpg);
	}
	#main
	{
			margin-left:auto;
			margin-right:auto;
			width:1200px;
			height:auto;
	}
	#button_bar
	{
		height:600px;
		width:100px;
		float:left;
		border-radius:10px 10px;
		//background-color:#753A00;		
	}
	.button
	{
		height:100px;
		width:100px;
		line-height:100px;
		margin-left:50px;
		display:table-cell;
		text-align:center;
		color:#FFC68C;
		color:#990000;
		text-shadow:#FFF 1px 1px 10px;
		font-weight:bold;
		font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
		border-radius:100%;
		//box-shadow:#990000 2px 2px 20px;
		border:2px #990000 solid;
		//background-color:#990000;
		//float:left;
		cursor:pointer;
	}
	#spbut
	{
		height:200px;
		width:200px;
		//float:left;
	}
	.subbut
	{
		height:40px;
		width:40px;
		line-height:40px;
		margin-top:2px;
		display:none;
		color:#990000	
	}
	#show
	{
		height:600px;
		width:1100px;
		float:left;
		//background-color:#000099;
		margin-left:auto;
		margin-right:auto;
	}
	#imag
	{
		margin-left:auto;
		margin-right:auto;
		height:500px;
		width:700px;
		box-shadow: 0px 0px 10px #990000;
		border:#990000 solid thin;
		//background-color:#00CC33;
		//background-image:url(files/2013-06-04.jpg);
	}
</style>
<body>
	<div id="main">
    	<div id="button_bar">
	        <div class="button">1</div><br />
            <div class="button">2</div><br />
            <div class="button">3</div><br />
            <div class="button">4</div><br />
            <div class="button">5</div>
        </div>
    </div>
    <div id="show">
    	<br /><br />
    	<div id="imag">
			<img id="image" height="500px" width="700px" src="files/1.jpg">
        </div>
    </div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(e) {
        $('.button').hover(function(){
				$(this).css('box-shadow','#990000 0px 0px 50px')
				$(this).css('color','#fff')
				$(this).css('text-shadow','#990000 0px 0px 50px')				
				no=$(this).text();
				$('#image').stop();
				$('#image').fadeOut(1000,'linear',function(){
					$('#image').attr('src','files/'+no+'.jpg');});
				$('#image').fadeIn(1000,'linear');	
				
				},function(){
				$(this).css('box-shadow','#990000 0px 0px 20px')
				$(this).css('text-shadow','#fff 1px 1px 10px')
				$(this).css('color','#990000');
		});
				
    });
</script>
</html>