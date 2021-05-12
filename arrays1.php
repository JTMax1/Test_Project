<?php
//An implementation of various array functions
#print_r("Student Scores form High - Low " .$student ."<br>");
#This is a simple array syntax

#sorting an array in ascending order
$numbers = array(43, 2, 123, 422, 677, 886, 234, 124);
sort($numbers);
print_r($numbers);


echo "<br>";

#sorting the same array in descending order
rsort($numbers);
print_r($numbers);

echo "<br>";


#Below is an associative array of students name(key) and their student(value) in a math quiz
$math_test = array("Emma"=>"16", "Hannah"=>"13", "Bolu"=>"19", "Daniel"=>"17", "Daniella"=>"14", "John"=>"14", "Aisha"=>"13", "Faith"=>"15", "Comfort"=>"18", "Innocent"=>"20",);


#sorting the array in ascending order based on the student(value)
asort($math_test);
print_r($math_test);

echo "<br>";

#sorting the array in descending order based on the student(value)
arsort($math_test);
print_r($math_test);

echo "<br>";

#sorting the array in ascending/alphabetical order based on the students name(key)
ksort($math_test);
print_r($math_test);

echo "<br>";

#sorting the array in descending order based on the students name(key)
krsort($math_test);
print_r($math_test);

echo "<br>";

#a list function

$my_array = array("A", "B", "C");

list($a, $b, $c) = $my_array;

echo "<br> Numbers, a $a, a $b and a $c.";

echo "<br>";


# an array function that count the occurances of values
$occurance= array("Uche", "David", "David", "Uche", "David", "Yusuf" );
print_r(array_count_values($occurance));

echo "<br>";


#this show the number of occurances of various score in our math test array
print_r(array_count_values($math_test));



#Below is a score (array) of some students were absent on the math test day 
$makeUp_test = array("Philip"=>"10", "Anne"=>"13", "Joseph"=>"19", "Lucy"=>"14", "Jude"=>"14", "Shalom"=>"13", "Fatima"=>"15", "Daniel"=>"13",);

echo "<br>";


#this array function merges math_test and $makeUp_test
echo "This array function merges math_test and makeUp_test <br>";
print_r(array_merge($math_test,$makeUp_test));


echo "<br>";
echo "";

echo "This array function merges math_test and makeUp_test <br>";
print_r(array_merge_recursive($math_test,$makeUp_test));


?>