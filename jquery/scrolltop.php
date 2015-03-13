<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scroll Top</title>
</head>

<body>
	<a href="#" id="bottom">Go to bottom</a>
    <img src="files/2013-04-30.jpg" />
	<img src="files/2013-04-30.jpg" />
	<img src="files/2013-04-30.jpg" />  
    <img src="files/2013-04-30.jpg" />
	<img src="files/2013-04-30.jpg" />
	<img src="files/2013-04-30.jpg" /> 
    <a href="#" id="top">Go to top</a>      
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(e) {
        $('img').width($(window).width()-10);
		$('#top').click(function(){
			$('html, body').animate( { scrollTop : 0},1000);
		})
		$('#bottom').click(function(){
			wheight=$('body').height()
			$('html, body').animate( { scrollTop : wheight},1000);
		})
    });
</script>
</html>