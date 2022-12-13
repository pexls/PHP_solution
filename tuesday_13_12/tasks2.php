<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
echo strtoupper($my_str);
?>

<h1>---------------------------------------------------------------------------------------------------</h1>


<?php
echo strtolower("Hello WORLD.");
?>


<h1>---------------------------------------------------------------------------------------------------</h1>



<?php
echo ucfirst("hello world!");
?>



<h1>---------------------------------------------------------------------------------------------------</h1>


<?php
echo ucwords("hello|world", "|");
?>



<h1>---------------------------------------------------------------------------------------------------</h1>


<?php
$str1= '082307'; 
echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
?>


<h1>---------------------------------------------------------------------------------------------------</h1>















</body>
</html>