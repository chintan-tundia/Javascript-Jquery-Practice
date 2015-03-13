<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
	#inputbox
	{
		height:500px;
		width:400px;
		float:left;

	}
	#outputbox
	{
		height:550px;
		width:900px;
		float:left;
	}
	
</style>
<body>
	<div id='inputbox'>
        Enter number of rows
        <input type"text" id="rows" />
        <br />
        Enter number of columns
        <input type"text" id="columns"/>
        <br />
        <input type="button" id="sub" value="Create"/>
    </div>
    <div id="outputbox"></div>
</body>
<script src="js/jquery-1.10.1.min.js"></script>
<script>
	$(document).ready(function(e) {
		$('#sub').click(function(){
			rows=$('#rows').val();
			columns=$('#columns').val();
			
			$.ajax({
				type : 'POST',
				url: 'createtable.php',
				data : {rows : rows , columns : columns},
				success: function(data){
					$('#outputbox').html(data);	
				}
				
			}).fail(function(){
				$('#outputbox').html("Error");	
			}
			);	
		})
        
    });
</script>
</html>