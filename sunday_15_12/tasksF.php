

<!-- //1. Write a simple PHP class which displays the following string. 
'MyClass class has initialized!' -->

<?php
class MyClass {
    public function __construct(){
        echo 'MyClass class has initialized !'."\n";

    }
}
$userclass = new MyClass;
echo "<br>"
echo "<br>"
?>



<!-- 2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. -->


<?php

class user_message {
public $message = "Hello All, I am Scott";
public function interface($name)
{
return $this->massage.$name;
}
}
$mymessage->introduce('Scott')."\n";
echo "<br>"
echo "<br>"
?>


<!-- 3. Write a PHP class that calculates the factorial of an integer -->



<?php
class factorial_of_a_number
{
  protected $_n;
  public function __construct($n)
   {
     if (!is_int($n))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
    $this->_n = $n;
	}
  public function result()
    {
     $factorial = 1;
     for ($i = 1; $i <= $this->_n; $i++)
	  {
	    $factorial *= $i;
      }
	   return $factorial;
	 }
 }

$newfactorial = New factorial_of_a_number(5);
echo $newfactorial->result();
echo "<br>"
echo "<br>"

?>



<!-- 4. Write a PHP class that sorts an ordered integer array with the help of sort() function.
Sample array : array(11, -2, 4, 35, 0, 8, -9)
Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 ) -->



<?php

class sortClass{

  public function __construct(array $arrayPassed){
    return sort($arrayPassed);
    }

}
$newarray=array(11,-2,4,35,0,8,-9);
$sorted =  new sortClass($newarray);
print_r($sorted);
echo "<br>"
echo "<br>"
echo "<br>"
?>



<!-- 5. Calculate the difference between two dates using the PHP OOP approach. 
Sample Dates : 1981-11-03, 2013-09-04
Expected Result : Difference : 31 years, 10 months, 1 days . -->

<?php
$sdate = new DateTime("1981-11-03");
$edate = new DateTime("2013-09-04");
$interval = $sdate->diff($edate);
echo "Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
echo "<br>"
echo "<br>"
echo "<br>"
echo "<br>"
?>

<!-- 
6. Write a PHP script to convert a string to Date and DateTime.
Sample Date : '12-08-2004'
Expected Output : 2004-12-08
Note : PHP considers '/' to mean m/d/Y format and '-' to mean d-m-Y format -->

<?php
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
echo "<br>"
echo "<br>"
echo "<br>"
echo "<br>"
?>



