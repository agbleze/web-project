<?php
#$x = "today";

#echo strtotime(x);
date_default_timezone_set('America/New_York');
echo date('d-M-Y', strtotime("+ 10 hours"));

// string functions
// substr(string to subset, position to start, length of string) takes parameters that subset a string from a position to a position
$fruit = " Good fruits Are good nOw ";
echo substr($fruit, 2);
echo "<BR>";
echo substr($fruit, -4, 2);
echo "<BR>";

// trim() this function removes spaces before and after a string. When a second parameter is passed, it removes it from the string
echo trim($fruit); echo "<BR>";
echo trim($fruit, 'd');
echo "<BR>";

//strlen() provides length of string
echo strlen($fruit);
echo "<BR>";

//strtotime() converts strings to time i.e number of seconds after 1 Jan 1970
$time = "yesterday";
echo strtotime($time);
echo "<BR>";

// strtolower() converts strings to lowercase
echo strtolower($fruit);
echo "<BR>";

//strtoupper() convert strings to UPPERCASE
echo strtoupper($fruit);

# Arrays
// storing in arrays
echo "<BR>";
$firstArray = array(2, 3, "numbers");
echo $firstArray[2]; 

echo "<BR>";
#Associative array have keys linked to values
$assocArray = array("name" => "Lin", "age" => 32);
echo $assocArray['age'];
echo "<BR>";
#Using associative array to store other assoc Arrays 
$asscoArrayInArray = array(
        "student" => array ("maths" => "Fail", "Eng" => "Aveg"), 
        "fess" => array ("primary" => 2300, "secodary" => "Extra classes"));

echo $asscoArrayInArray['student']['Eng'];