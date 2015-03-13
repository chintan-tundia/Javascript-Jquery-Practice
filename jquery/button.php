<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jquery-practice</title>
</head>
<style>
input[type="button"]
{
	height:50px;
	width:50px;
	background-color:#CCCCCC;
	color:#999999;
	border-radius:50%;
	border:none;
	opacity:0.5;
	cursor:pointer
}
#navigation
{
	z-index:3;
	height:auto;
	width:auto;
	display:none;
	transition:ease;
	cursor:pointer;
}
#img1
{
	background-image:url(files/2013-06-03.jpg);
	height:400px;
	width:400px;
	margin-left:auto;
	margin-right:auto;
	border:20px groove black;
	
}
#img1:hover
{
	opacity:1;
}
</style>
<body  bgcolor="#EAFECF">
<br /><br /><br /><br /><br />
<div id="img1">
<div id="navigation">
<br /><br /><br /><br /><br /><br /><br />
<center>
<table>
<tr>
	<td></td>
    <td><input type="button" value="▲" id="up" /></td>
    <td></td>
</tr>
<tr>
	<td><input type="button" value="◄" id="left"/></td>
    <td></td>
    <td><input type="button" value="►" id="right"/></td>
</tr>
<tr>
	<td></td>
    <td><input type="Button" value="▼" id="down"/></td>
    <td></td>
</tr>
</table>
</center>
</div>
</div>
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/button.js"></script> 
</html>