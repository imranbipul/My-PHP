<?php
$num = 5;
if ($num > 5){
    echo "you are allowed=5";
} elseif ($num == 5) {
    echo "you are equal 5";
}
 else{
    echo "You are not allowed = 5";
}
echo "<br>";
echo "<br>";

$age = 12;
if ($age >= 5 && $age <= 5){
    echo "You are Allow Primary";
} elseif($age >=10){
    echo "You are allow High Scholl";
}else {
    echo "You are not allow";
}
echo "<br>";
echo "<br>";
echo "<h3><strong>Admission</strong></h3>";


$age = 8;
$gander = "male";
if ($age >= 5 && $age <= 9){
    if($gander == "male") {
        echo "You are Allow Primary Day shift ";
    }
    else {
        echo "You are Allow Primary morning shift ";
    }
} elseif($age >=10){
    if($gander == "male") {
        echo "You are Allow high school Day shift ";
    }
    else {
        echo "You are Allow high school morning shift ";
    }
}else {
    echo "You are not allow";
}

echo "<br>";
echo "<br>";
echo "<h3><strong>married</strong></h3>";
$age = 20;
$gander = "male";

if ($age >= 21 && $gander == "male") {
    echo "congress! (He) Biye korar onumoti dea gelo";
} elseif ($age >= 18 && $gander == "female") {
    echo "congress! (she) Biye korar onumoti dea gelo";
} else {
    echo "Boyos hoina";
}

echo "<br>";
echo "<br>";
echo " <h3><strong>Largest Number</strong></h3> ";
$a = 10;
$b = 30;
$c = 100;

if ($a > $b && $a > $c) {
    echo "Largest number is".$a;
} elseif ($b > $a && $b > $c) {
    echo "Largest number is".$b;
}
 elseif ($c > $a && $c > $b) {
    echo "Largest number is".$c;
} else {
  echo "wrong";  
}

echo "<br>";
echo "<br>";
echo " <h3><strong>Tour</strong></h3> ";

$age = 25;
$gander = "female";
if ($age >= 18 && $gander == "male") {
    echo "You (He) are allowed to tour.";
} elseif ($age >= 24 && $gander == "female") {
    echo "You (She) are allowed to tour.";
} else {
    echo "You are not allow";
}
echo "<br>";
echo "<br>";
echo " <h3><strong>Marksheet</strong></h3> ";
$mark = 80;
if ($mark >=80 && $mark <= 100) {
    echo "A+";
} else if ($mark >=70 && $mark <= 80)
{
    echo "A";
}

echo "<br>";
echo "switch";
echo "<br>";
$mark = 70;
switch($mark){
    case ($mark >= 70 && $mark <= 80);
    echo "A";
    break;
    default:
    echo "failled";
}
echo "<br>";
echo "<br>";
echo " <h3><strong>Arithmatic</strong></h3> ";
$num =20;
$num +=5;
echo "$num";
$num++;
echo "$num";
$num++;
echo "$num";

echo "<br>";
echo "<br>";
echo " <h3><strong>for loop</strong></h3> ";
for($a = 1; $a <= 15; $a++) {
    echo $a;
}
echo "<br>";
echo "<br>";
echo "while loop";
echo "<br>";
$year = "2021";
while($year >= 2000 ){
    echo $year;
    $year --;
}
echo "<br>";
echo "<br>";
echo "do while";
echo "<br>";
$me = 1;
do{
    echo $me;
    $me ++;
}while($me <=100);

echo "<br>";
echo "<br>";
echo " <h3><strong>Even</strong></h3> ";
for ($i = 1; $i <= 100; $i++) {
    if ( $i % 2 == 0){
        echo $i;
    }
}
echo " <h3><strong>odd</strong></h3> ";
for($a = 1; $a <= 1000; $a+=10) {
    echo $a;
}




?>