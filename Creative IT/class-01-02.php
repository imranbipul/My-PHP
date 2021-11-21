<?php
//veriable......
$first_name = "Imran Hasan";
echo $first_name;
echo "<br>";
$first_name = "Bipul";
echo $first_name;

echo "<br>";
echo "<br>";

//constant........
define('USERNAME' , "Imran hasan bipul");
echo USERNAME;

echo "<br>";
echo "<br>";

//concate.......
$full_name = "Imran";
$last_name = "Hasan";
echo $full_name = $full_name.' '.$last_name;
echo "<br>";
echo $full_name;

echo "<br>";
echo "<br>";

//string method and function...........
$main_text = "     What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting 
electronic typesetting, remaining essentially unchanged. It was popularised 
in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
passages, and more recently with desktop publishing software like Aldus 
PageMaker including versions of Lorem Ipsum.   ";
echo $main_text;
echo "<br>";
echo "<br>";
echo strlen($main_text);
echo "<br>";
echo str_word_count ($main_text);
echo "<br>";
echo strlen(ltrim ($main_text));
echo "<br>";
echo strlen(rtrim ($main_text));
echo "<br>";
echo strlen(trim ($main_text));
echo "<br>";
echo "<br>";
echo strrev ($main_text);
echo "<br>";
echo "<br>";
echo strtoupper($main_text);
echo "<br>";
echo "<br>";
echo strtolower($main_text);
echo "<br>";
echo "<br>";

$num1 = 30;
$num2 = 45;
$total = $num1 + $num2;
echo $total;

echo "<br>";
echo "<br>";

function imran($num3, $num4) {
	echo $total = $num3 - $num4;
}
imran(120, 20);

echo "<br>";
echo "<br>";

$main_text = '"hello i am here"';
echo $main_text;

echo "<br>";
echo "<br>";

$text1 = "Imran Ali";
$text2 = "I am a student";
echo "<h1>" . $text1 . "</h1>";
echo "study PHP at" . $text2;

$text1 = "Imran Ali";
$text2 = "I am a student";
print "<h1>" . $text1 . "</h1>";
print "study PHP at" . $text2;
echo "<br>";
echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>";

define("cars",[
	"RFL",
	"Imran",
	"Hasan",
	"Bipul",
]);
echo cars[1];







?>