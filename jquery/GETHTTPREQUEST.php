<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
 #feedback
 {
	 height:20px;
	 width:150px;
	 text-align:center;
	 background-color:#CCCCCC;
 }
</style>
<body>
<form action="shuffle.php" method="get">
	<input type="text" name='input' id="input"/>
    <input type="button" id="but" value="Go"/>
</form>
<div id="feedback"></div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#but').click(function(){
		string=$('#input').val();
    	$.get('shuffle.php',{ input: string },function(data){
			$('#feedback').html(data);
		});
	})
	
});
</script>
</html>