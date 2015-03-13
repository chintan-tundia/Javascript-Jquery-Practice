<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>

</head>
<style>
	.text
	{
		color:green;
		font-size:18px;
		text-shadow:1px 1px #000000;
	}
</style>

<body>
	<textarea id="cont" rows="2" cols="20" placeholder="Please write something" maxlength="60"></textarea>
    <br />
    <span class="text">60</span> <span style="font-size:18px">characters left.</span>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
		$(document).ready(function(){
			$('#cont').keyup(function(){
			maxlen=60;
			currlen=$('#cont').val().length;
			left=maxlen-currlen
			if(left<=10)
			{
				$('.text').css('color','red');
			}
			else if(left<=25)
			{
				$('.text').css('color','yellow');
			}
			else
			{
				$('.text').css('color','green');
			}
			$('.text').text(left);
			});
		})
</script>
</html>