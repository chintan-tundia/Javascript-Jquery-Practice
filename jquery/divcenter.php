<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Div center</title>
<style>
	#verycenter
	{
		position:absolute;
		height:300px;
		width:400px;
		background-image:url(files/coolstalk_cut-the-rope.jpg);
		background-position:center;
		background-size:cover;
		border:thick solid #4F8004;
	}
	body
	{
		background-color:#DFFDB3;
	}
</style>
</head>
<body>
	<div id="verycenter">    </div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(e) {
    function div_center()
	{
		window_height=$(window).height();
		window_width=$(window).width();		
		obj_height=$('#verycenter').height();
		obj_width=$('#verycenter').width();
		$('#verycenter').css('top',(window_height/2) - (obj_height/2)).css('left',(window_width/2) - (obj_width/2))
		
	}
	$(window).resize(function(){
		div_center();
	})
	div_center();
});
</script>
</html>