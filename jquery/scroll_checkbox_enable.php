<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>

<body>
<textarea id="terms" rows="10" cols="30">
Cut the Rope
From Wikipedia, the free encyclopedia
Cut the Rope

Logo of the original Cut the Rope
Developer(s)	ZeptoLab
Platform(s)	iOS
Android
Symbian
BlackBerry PlayBook[1]
DSiWare
Mac OS X
Browser[2][3]
Windows
Windows Phone
BlackBerry
Release date(s)	Cut the Rope: 2010 (on iOS)
Cut the Rope: Experiments: 2011
Cut the Rope: Time Travel: April 2013
Genre(s)	Puzzle
Mode(s)	Single
Cut the Rope is a series of physics-based puzzle video games by the Russian developer ZeptoLab for several platforms and devices. It consists of the original Cut the Rope (2010), the sequel Cut the Rope: Experiments (2011) and Cut the Rope: Time Travel (2013).
The objective of the Cut the Rope games is to feed candy to a little green monster named Om Nom while collecting stars. As of 2012, the original Cut the Rope had been downloaded more than 100 million times.[4]
</textarea>
<br />
<input id="agree" type="checkbox" />I agree to the terms and conditions.	
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#agree').attr('disabled','disabled')
    $('#terms').scroll(function(){
		textarea_height=$(this)[0].scrollHeight;
		scroll_height=textarea_height - $(this).innerHeight();
		scroll_top=$(this).scrollTop();
		if(scroll_top == scroll_height)
		{
			$('#agree').removeAttr('disabled');
		}
	})
});
</script>
</html>