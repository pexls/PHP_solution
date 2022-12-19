


<!-- in page1 -->


<?php
// get submitted data !
$firstname = $_POST["first"];

// Query the database!
$conn = mysqli_connect("localhost" , "root" , "" , "databasename");
$sql = "SELECT * FROM names WHERE names_frist = ?";
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $sql)){
mysqli_stmt_bind_param($stmt, "s" , $firstname);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// we show the data to the user!
while ($row = mysqli_fetch_assoc($result)){
echo $row['names_first'] . " & " . $row['names_last'];
    }
}

?>



<!-- ---------------------------------------------------------------------------- -->



<!-- in page2 -->

 
<!-- Object Oriented Exsambel -->



<?php

// link to classes
require 'model.inc.php';
require 'contr.inc.php';
require 'view.inc.php';

// get submitted data!
$firstname = $_POST["first"];

// Query the database!
$objectContr = new Contr;
$names = $objectContr->getNames($firstname);

// we show the data to the user!
$$objectView = new View;
$$objectView->showNames($namee);

?>




<!-- ----------------------------------------------------------------------- -->



<!-- in page3 -->


<?php









