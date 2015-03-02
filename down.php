<html>
<head>
<title>
Magic Square 
</title>
</head>
<body>


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<br />
Enter the dimension for magic square (2-9) :-
<br />
<input type="text" value="3" name="dime" />
<br />
<input type="submit" value="GO" />
</form> 
</body>
</html>

<?php

// Magic square
// @ Author : aksshay


if(isset($_GET['dime']))
{
$dime = $_GET['dime'];
$number_of_elements = $dime * $dime;
$values = 1;

for ($row = 0; $row < $dime ; $row++)
    for ($column = 0; $column < $dime; $column++)
        $array_a[$row][$column] = $values++; 
        
$middle = $dime/2;
$middle = ceil($middle) - 1;

for ($column = 0; $column<$dime; $column++)
    $array_b[$middle][$column] = $column+1;
    
$temp_b = $middle-1;

while($temp_b >= 0)
{
    
    for ($column = 0; $column < $dime; $column++)
    {
        
        if ((($array_b[$temp_b+1][$column])-1) != 0)
             $array_b[$temp_b][$column] = $array_b[$temp_b+1][$column]-1;
        else
             $array_b[$temp_b][$column] = $dime;    
                    
        }
        
    $temp_b--;
}
    
$temp_b = $middle+1;    
while($temp_b < $dime)
{
    
    for ($column = 0; $column < $dime;$column++)
    {
        if ((($array_b[$temp_b-1][$column])+1) <= $dime)
        $array_b[$temp_b][$column] = $array_b[$temp_b-1][$column]+1;
        else
        {
            $array_b[$temp_b][$column] = $array_b[$temp_b-1][$column]+ 1 - $dime;
                    }
        
        }
        
    $temp_b++;
}

$swape = $dime-1;
for ($row = 0; $row < $dime ; $row++)
{
    for ($column = 0; $column < $dime; $column++)
    {
        $array_c[$row][$column] = $array_b[$swape][$column];
}
$swape--;
}

for ($row = 0; $row < $dime ; $row++)
    for ($column = 0; $column < $dime; $column++)
    {   $row_element = $array_b[$row][$column]-1;
        $column_element = $array_c[$row][$column]-1;
        $magic_square[$row][$column] = $array_a[$row_element][$column_element];
     }
   
?>

<table align="center" width="500" height="100" cellpadding="2" cellspacing="2" bordercolorlight="#159C18">
<?php
for ($row = 0; $row < $dime ; $row++)
{
    echo "<tr>";
    for ($column = 0; $column < $dime; $column++)
        echo  "<td>".$magic_square[$row][$column]."\t"."</td>";
    echo "</tr>";
        }
        
        ?>
        <br />
        </table>
        <?php
        
     
}

else
{
echo "Dimensions aren't set";
}
?>