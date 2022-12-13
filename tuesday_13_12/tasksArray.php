<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  




<!-- //Write a script to generate the following paragraph 
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
The words 'red', 'green' and 'white' should come from $colors array. -->


<?php
$colors =array('red' , 'green' , 'white' );
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $colors[0]  carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo '<br>';
?>


<h1> ------------------------------------------------------------------------------------------------ </h1>


<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";

echo '<br>';
?>


<h1> ------------------------------------------------------------------------------------------------ </h1>


<?php

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );





$cities = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($cities) ;
foreach($cities as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>


<h1> ------------------------------------------------------------------------------------------------ </h1>



<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
echo '<br>';
echo '<br>';
echo '<br>';
?>



<h1> ------------------------------------------------------------------------------------------------ </h1>

<?php
echo '<pre>';
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n";
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '</pre>';
?>




<h1> ------------------------------------------------------------------------------------------------ </h1>





<!-- Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange -->


<?php
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
asort($fruits);
print_r($fruits);

echo '<pre>';
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
asort($fruits);
print_r($fruits);
echo '</pre>';

echo '<br>';
echo '<br>';
echo '<br>';

?>

<h1> ------------------------------------------------------------------------------------------------ </h1>



<?php
echo '<pre>';
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
?>


<h1> ------------------------------------------------------------------------------------------------ </h1>


<!-- $array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4); -->



<?php
echo "<pre>";
$array1=array("color"=>"red",2,4);
$array2=array("a","b","color"=>"green","shape"=>"trapezoid",4);
print_r(array_merge($array1,$array2));
echo "</pre>";
echo '<br>';
echo '<br>';
echo '<br>';

?>










<h1> ------------------------------------------------------------------------------------------------ </h1>


<?php
echo "<pre>";
$colors = array( "Red", "Green", "Black", "White"); 
print_r($colors);

$upper_colors = array_map('strtoupper', $colors);
print_r($upper_colors);
echo "</pre>";
?>



<h1> ------------------------------------------------------------------------------------------------ </h1>


<?php
$colors=array("red","blue","white","yellow");
?>








</body>
</html>



