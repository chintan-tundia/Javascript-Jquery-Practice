<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
img
{
	border-radius:10%;
	border:black medium solid
}
#cont
{
	height:500px;
	width:500px;
	font-size:120px;
	
}
</style>
<body>
 <img name="1" src="files/favicon.ico"/>
 <img name="2" src="files/favicon.ico"/>
 <img name="3" src="files/favicon.ico"/>
 <div id="cont">1</div>
 
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$('img[name="1"]').click(function(){$('#cont').text('1')});
	$('img[name="2"]').click(function(){$('#cont').text('2')});
	$('img[name="3"]').click(function(){$('#cont').text('3')});	
</script>

</html>