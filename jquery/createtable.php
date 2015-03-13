<?php
 if(isset($_POST['rows']) && isset($_POST['columns']))
 {
	 $rows=$_POST['rows'];
	 $cols=$_POST['columns'];
	 if($rows>20 || $cols >12)
	 {
		 die("Number of rows should be less than 20 and number of columns should be less than 12");
	 }
	 
	 //$rows=2;
	 //$cols=3;
	 echo "<table border='1'><tr><th></th>";
	 for($i=1;$i<=$cols;$i++)
	 {
	 	echo "<th width='100px' contenteditable='true'>Column#".$i."</th>";
	 }
	 echo "</tr>";
	 for($i=1;$i<=$rows;$i++)
	 {
		 echo "<tr width='100px' height='20px'><th contenteditable='true'>Row#".$i."</th>";
		 for($j=1;$j<=$cols;$j++)
	 	 {
			 echo "<td width='100' contenteditable='true'></td>";
		 }
		 echo "</tr>";
	 }
	 echo "</table>";
 }
?>