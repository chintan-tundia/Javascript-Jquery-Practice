<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Highlighting Practice</title>
</head>
<style>
li
{
	width:200px;
	height:30px;
	padding:0;
	margin:0;
	list-style-type:none;
}
.highlight
{
	background-color:#FFFF33;
	list-style-image:url(files/tick7.png);
}
</style>
<body>
Search keyword:
<input type="text"  id="searcht"/>
<p>
	Some of the popular brands:-
    <ul id="para">
    	<li>Gucci</li>
        <li>Channel</li>
        <li>Ralph Lauren</li>
        <li>Lacoste</li>
        <li>Nike</li>
        <li>Abercrombie & Fitch</li>
        <li>Hugo Boss</li>
        <li>Louis Vuitton</li>
        <li>Holister</li>
        <li>Prada</li>
        <li>Dior</li>
        <li>Versace</li>
    </ul>
</p>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
$(document).ready(function(e) {
    $('#searcht').keyup(function(){
			searchnm=$(this).val();
			$('#para li').removeClass('highlight');
			if(jQuery.trim(searchnm)!='')
			{
				$("#para li:contains('"+ searchnm +"')").addClass('highlight');
			}
			
		
		});
});
</script>
</html>