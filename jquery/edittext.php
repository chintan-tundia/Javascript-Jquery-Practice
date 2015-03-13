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
	font-family:"Times New Roman", Times, serif;
	font-size:larger;
}
#box1
{
	float:left;
	height:auto;
	width:500px;
}
#box2
{
	float:left;
	height:auto;
	width:300px;
}
select
{
	padding:2px;
	height:25px;
	width:200px;

}
</style>
<body>
<div id="box1">
    <b>Select font size:</b>
	<select class="size">
        <option>x-small</option>
        <option>xx-small</option>
        <option>small</option>
        <option>smaller</option>
        <option>medium</option>
		<option>large</option>
        <option selected="selected">larger</option>
        <option>x-large</option>
        <option>xx-large</option>
        <option>9px</option>
        <option>10px</option>
        <option>12px</option>
        <option>14px</option>
        <option>16px</option>
        <option>18px</option>
        <option>24px</option>
        <option>36px</option>
    </select>
    <br />
    <b>Select font family:</b>
	<select class="family">
	<option>"Times New Roman", Times, serif</option>
    <option>Verdana, Geneva, sans-serif</option>
	<option>Georgia, "Times New Roman", Times, serif</option>
	<option>"Courier New", Courier, monospace</option>
	<option>Arial, Helvetica, sans-serif</option>
	<option>Tahoma, Geneva, sans-serif</option>
	<option>"Trebuchet MS", Arial, Helvetica, sans-serif</option>
	<option>"Arial Black", Gadget, sans-serif</option>
	<option>"Palatino Linotype", "Book Antiqua", Palatino, serif</option>
	<option>"Lucida Sans Unicode", "Lucida Grande", sans-serif</option>
	<option>Calibri</option>
	<option>"Microsoft Himalaya"</option>
    </select>
    <br />
    <b>Select font-style</b>
    <select class="style">
    <option>normal</option>
    <option>italic</option>
    </select>
     <br />
     <style>
	 .c
	 {
		 font-weight:bold,bolder,lighter
	 }
     </style>
    <b>Select font-weight</b>
    <select class="weight">
    <option>100</option>
    <option>200</option>
    <option>300</option>
    <option>400</option>
    <option>500</option>
    <option>600</option>
    <option>700</option>
    <option>800</option>
    <option>900</option>
    <option>bold</option>
    <option>bolder</option>
    <option>lighter</option>
    </select>
</div>
	<div id="box2"><textarea id="text">Some random text</textarea></div>    
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(){
		$('select.size').change(function(){
			x=$(this).val();
			$('#text').css('font-size',x);
		});
	});
	
	$(document).ready(function(){
		$('select.family').change(function(){
			x=$(this).val();
			$('#text').css('font-family',x);
		});
	});
	$(document).ready(function(){
		$('select.style').change(function(){
			x=$(this).val();
			$('#text').css('font-style',x);
		});
	});
	$(document).ready(function(){
		$('select.weight').change(function(){
			x=$(this).val();
			$('#text').css('font-weight',x);
		});
	});
</script>
</html>