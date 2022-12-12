


/*<?php
echo "PHP was created in 1994 and is one 
of the foundational technologies of modern web development.
Given all the new technologies used today, is there still
a place for PHP?"
?>

<!-- -------------------------------------------------------------------- -->
<?php

echo "'Tomorrow I'll learn PHP global variables.
This is a bad command: del "

?>
<!-- ------------------------------------------------------------------- -->

<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='POST'>
   <h2>you'r name pls</h2>
 <input type="text" name="name">
 <input type="submit" value="Submit Name">
 </form>
<?php
//Retrieve name from query string and store to a local variable
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>

<!-- ------------------------------------------------------- -->

<?php  
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
?>  

<!-- ------------------------------------------------ -->
<?php
echo basename(__FILE__, '.php'); 
?>


<!-- ----------------------------------------------------------------- -->

<?php
// $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
// $pieces = explode(" ", $pizza);
$str = "https://www.w3schools.com/php/default.asp";
$split = explode("/", $str);
print_r($split);
echo "<br>"
?>





    
<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
?>



<?php
//header('Location: https://www.w3schools.com/');
?>

