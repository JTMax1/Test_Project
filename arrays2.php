<?php


$colors= array("red", "green", "blue", "white" );


#this array function pops out the last element.
array_pop($colors);
print_r($colors);

echo "<br>";

#Function to push value to array.
array_push($colors, "white");
print_r($colors);

echo "<br>";

#Function to calculate product of values of an array
$prod=array(6, 9);{
echo(array_product($prod));
}
echo "<br>";

#Function to print random values of an array
$random_keys=array_rand($colors, 3);
{
echo $colors[$random_keys[0]]."<br>";
echo $colors[$random_keys[1]]."<br>";
echo $colors[$random_keys[2]]."<br>";
}

#a dice game
$dice1=array("1", "2", "3", "4", "5", "6",);
$dice2=array(1, 2, 3, 4, 5, 6);
$casted1=array_rand($dice1, 3);
$casted2=array_rand($dice2, 3);
echo $dice1[$casted1[0]]."<br>";
echo $dice2[$casted2[1]]."<br>";


#replacing item in array



#reverses item in the array









?>