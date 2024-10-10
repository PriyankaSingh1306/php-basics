<?php

echo "Hello World HI"

// Single line comment or
# comment
/* Multi line comment */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Basics</title>
</head>
<body>
  
<h1><?php echo "Hi" ?></h1>
<?php

  echo "<h2> H2 Heading </h2>"
?>

</body>
</html>

<?php

/*
## Variable
A resuable container that holds the data

## Dat Type
string, Integer, float, boolean

*/

$name = "Priyanka";
$age = 29;
$marks = 78.5;
$isMarried = true;

echo "My name is : ". $name;
echo "<br>My age is : ". $age;
echo "<br>My marks are : $marks %";
echo "<br>Are you married : ". $isMarried;
echo '<br>Are you married : $isMarried';

echo "<br><br>";

var_dump($name);
echo "<br>";

var_dump($age) . "<br>";
echo "<br>";

var_dump($marks) . "<br>";
echo "<br>";

var_dump($isMarried) . "<br>";
echo "<br>";

echo "<br><br>";
/* 

  ## Arithmatic Operators
  + - * / ** %

  ## Increment/Decrement Operators
  ++ --

  ## Operators Precedence
  ()
  **
  * / %
  + -

*/


$a = 11;
$b = 2;
$c =  $a + $b;
$c1 =  $a * $b;
$c2 =  $a / $b;
$c3 =  $a % $b;
$c4 =  $a ** $b;
echo $a . "+" . $b . "=" . $c;
echo "<br>" . $a . "*" . $b . "=" . $c1;
echo "<br>" . $a . "/" . $b . "=" . $c2;
echo "<br>" . $a . "%" . $b . "=" . $c3;
echo "<br>" . $a . "**" . $b . "=" . $c4;

echo "<br><br>";


$p = 10;
echo $p."<br>";
$p++;
echo $p."<br>";

$r = ++$p;
echo $r."<br>";

$q = $p++;
echo $q."<br>";
echo $p."<br>";




/*

## Pre defined functions
String function 
number function
math function

*/


//String function
$name = "Priyanka singh";
echo "<br><br>";
echo strlen($name);
echo "<br>". str_replace("P", "I", $name);
echo "<br><br>". str_replace("R", "I", $name);
echo "<br><br>". str_ireplace("R", "I", $name);
echo "<br><br>". ucwords($name);
echo "<br><br>". ucfirst($name);
echo "<br><br>". strtoupper($name);

echo "<br><br>";

##number function
$num = "30";
$num = 30;
var_dump(is_int($num));
echo "<br><br>";
var_dump(is_float($num));

echo "<br>";
$num2 = "10.23";
var_dump(is_numeric($num2));
echo "<br><br>";

#math function

echo pi(). "<br>";
echo abs(-45). "<br>";
echo sqrt(100). "<br>";
echo round(30.49). "<br>";
echo rand(). "<br>";
echo rand(1,100). "<br>";
echo "<br><br>";
/**
 * If Conditional Statement
 * 
 * Relational Operators : > < >= <= == !
 *  
 */


 $age = 18;
 if($age>=18){
  echo "You can vote";
 }
 else if($age == 0){
  echo "Please enter valid number";
 }
 else{
  echo "You cannot vote";
 }

echo "<br><br>";


$hours =  45;
$rate = 10;
$weekPay = 0;


if($hours <= 0){
  $weekPay = 0 ;
}
if ($hours <= 40){
  $weekPay = $hours * $rate;
}
else{
  $weekPay = (40 * $rate) + (($hours - 40) * ($rate * 1.5));
}
echo "Your weekly payment is Rs: " . $weekPay;
echo "<br><br>";

##Logical Operator = Combine Conditional Statement
## if(condition 1 && condition 2)

// && || !

$temp = 30;
$cloudy = true;
if($temp > 0 || $temp < 30 ){
  echo "Temp is good";
}
else{
  echo "Temp is not good";
}
echo "<br>";

if(!$cloudy){
  echo "It's cloudy outside";
}else
{
  echo "It's sunny";
}
echo "<br><br>";


## Switch Conditional Statement = Replacement of elseif

$grade = "H";

switch($grade){
  case "A":
    echo "You did great";
    break;
  case "B":
    echo "You did good";
    break;
  case "C":
    echo "You did okay";
    break;
  case "D":
    echo "You did poor";
    break;
  case "F":
    echo "You failed";
    break;
  default:
    echo $grade . " is not valid";
}

echo "<br><br>";

## for loop = repeat some code a certain period of time

//for(;;){ //infinite loop
for($i = 1; $i <= 5; $i +=2){ 
 
  echo "i is ". $i . " Hello<br><br>";
}

$i = 1;
while( $i <= 5){ 
 
  echo "i is ". $i . " Hello<br><br>";
  $i +=2;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $i = 1;
  while( $i <= 10){ 
   
    ?>
    <p><?php echo $i ?></p>
    <?php $i++;
  } 
 
  ?>  


</body>
</html>




<?php

/*
Array - which can hold more than one value at a time

*/
//Indexed Array
$fruits = array("apple", "orange","banana","mango");

//echo $fruits[0];
//$fruits[0] = "Coconut";

//array_push($fruits, "pineapple","kiwi");
//array_pop($fruits); //remove last element
//array_shift($fruits); //shift 1st element
$reverse_fruits = array_reverse($fruits);

echo count($fruits);

foreach($reverse_fruits as $fruit){
  echo "<br>" . $fruit . "<br>";
}

## Associative Array -  An array with key => value pair
# define key name as a string

$employees = array(
  "rama" => "Software Engineer",
  "Priyanka" => "Web Developer",
  "sam" => "Web Designer"
);

#Predefined functions

$keys = array_keys($employees);
$values = array_values($employees);
//$employees = array_flip($employees);
$employees = array_reverse($employees);

echo "<pre>";
print_r($keys);

echo "<pre>";
print_r($values);

echo "<pre>";
print_r($employees);


?>

<?php
foreach($employees as $key => $value){
  ?>
  <p><b><?php echo  ucwords($key) . ": "; ?></b> <?php echo $value ; ?> </p>
<?php  }  ?>


<?php

## Multidimentional array

$students = array(
  array("name" => "Priyanka", "class" => "BCA"),
  array("name" => "Ram", "class" => "MCA")
);

echo "<pre>";
print_r($students);
//exit;

foreach($students as $key => $value){
  echo "<pre>";
  print_r($value);

    foreach($value as $k => $v){
      echo "<b>". ucwords($k) . "</b>: " . $v . "<br>";
    }
}

?>


<?php


#User defined Function - block of statements that can be used in a program

// function definition
function myFun(){
  echo "Welcom from myFun";
}

//function call
myFun();

echo "<br><br>";


$a = 2;
$b = 4;

sum($a, $b);

function sum($a, $b){
  echo $a + $b . "<br>";
}

$total = sum1($a, $b);
echo $total . "<br>";

function sum1($a, $b){  // No same function name in a single file
  return $a + $b . "<br>";
}

?>


<?php

/*

## isset()
Return TRUE, if a variable is declared and not null

## empty()
Return TRUE, if a variable is not declared, false, null, ""

*/

//$name = "Priyanka";
//$name = null;
$name = "";

//echo isset($name);

if(isset($name)){
  echo "<br> Name is SET";
}else
  echo "<br> Name is not SET";


  //$name = "Priyanka";
  //$name = "";
  //$name = null;
  $name = false;
  
  if(empty($name)){
    echo "<br> Name is EMPTY";
  }else
    echo "<br> Name is not EMPTY";

    echo "<br><br>";
?>



<?php

/*

## $_GET, $_POST (Associative array : Keys are the name attribute values)
PHP Special / Super global variables used to 
collect data from the HTML form, when data
is sent to a file via action attribute in the 
<form> tag.

<form action="file.php" method = "GET">
(Not SECURE can be used for getting values from search page
GET request can be cached
Bookmark is possible with values)
<form action="file.php" method = "POST">

*/

//echo "<pre>";
//print_r($_GET);
//exit;

if(isset($_POST['submit'])){

  if(empty($_POST['username'])){

    echo "Username is empty";

  }else if(empty($_POST['password'])){
    
    echo "Password is empty";

  }else{

    echo "All good";
  }

}

?>


<!--DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <div>
      <label>Username:</label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
    <label>Password:</label>
    <input type="password" name="password">
    </div>
    <br>
    <div>
      <button type="submit" name = "submit">Log In</button>
    </div>
    </form>  
</body>
</html-->


<?php

# Handling Radio buttons in form

?>

<!--DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label>Select any course</label><br>
    <input type="radio" value ="BCA" name="course">BCA<br>
    <input type="radio" value ="MCA" name="course">MCA<br>
    <input type="radio" value ="Btech" name="course">Btech<br>
  
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>
</html-->


<?php

//echo "<pre>"; print_r($_POST); exit;

if(isset($_POST['confirm'])){
  $course = null;
  if(isset($_POST['course'])){
    $course = $_POST['course'];
  }
  //echo "course value : " . $course ."<br>";

  switch($course){
    case "BCA":
    echo "You selected the course: " . $course;
    break;
    case "MCA":
    echo "You selected the course: " . $course;
    break;
    case "Btech":
    echo "You selected the course: " . $course;
    break;
 default:
    echo "Please select any of the course";
  }
}

?>



<?php

# Handling Check Boxes in form 
# Multiple values can be selected so we use Array

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label>Select fav Food</label><br>
    <input type="checkbox" value ="fastfood" name="foods[]">fastfood<br>
    <input type="checkbox" value ="sweets" name="foods[]">sweets<br>
    <input type="checkbox" value ="namkeen" name="foods[]">namkeen<br>
  
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>
</html>


<?php



if(isset($_POST['confirm'])){
  //echo "<pre>"; print_r($_POST); exit;
  $foods = $_POST['foods'];
  //echo $foods[1] . "<br>";

  foreach($foods as $f){
    echo "You have selected: " . $f . "<br>";
  } 
}

?>
