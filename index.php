<?php

if(isset($_POST['a']))
	{
$val = $_POST['a'];
 $val2=$val ;
 echo $val3=ceil($val2/2);
 $count = 1;
 
 echo $box1[0][0]=0;
 ?>
 
<!doctype html>
<html> 	
	<head>
			
	</head>
	
		<body>
				<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
						Enter a number<input type="text" name="a" >
						<input type="submit" name="submit">
						
						
						
				</form>
				
				<table border="1">
<?php
			for($row=0 ; $row < $val; $row++)
			{
			
			
			echo "<tr>";
				for($column=0; $column < $val; $column++)
					{
					if(($val3-1)==$column){
					echo "<td>";
					
					echo $box1[$row][$column]=$count;
					
						echo "</td>";
						$count++;
						}else{
						
					echo "<td>";
					echo $box1[$row][$column]=0;
						echo "</td>";
						}
					}
					

			}
	}

		

?>
 </table>
		</body>
</html>