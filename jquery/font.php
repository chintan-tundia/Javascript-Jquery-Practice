<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Practice</title>
</head>
<style>
#text
{
	border:thin solid #993300;
	box-shadow:0px 0px 10px #993300;
	height:50px;
	width:300px;
}
</style>
<body>
    <b>Select font size:</b>
	<select class="menu">
    	
       
		<option>9px</option>
        <option>10px</option>
        <option>12px</option>
        <option>14px</option>
        <option>16px</option>
        <option>18px</option>
        <option>24px</option>
        <option>36px</option>
        <option>large</option>
        <option>larger</option>
        <option>medium</option>
        <option>small</option>
        <option>smaller</option>
        <option>x-large</option>
        <option>xx-large</option>
        <option>x-small</option>
        <option>xx-small</option>
        

    </select>
    <br /><br /><br />
	<div id="text">Some text</div>    
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('select').change(function(){
			x=$(this).val();
			$('#text').css('font-size',x);
		});
	});
</script>
</html>