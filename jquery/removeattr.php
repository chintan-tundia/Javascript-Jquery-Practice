<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<body>
	<input type="checkbox" id="chk"/>I agree<br />
	<input type="button" id="but"value="Continue" disabled="disabled"/>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$('#chk').click	(function(){
		
			if($('#but').attr('disabled'))
			{		
				$('#but').removeAttr('disabled');
			}
			else
			{
				$('#but').attr('disabled','disabled');
			}
		});
</script>

</html>