<?php
/*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/
$a = 0;
while ($a <= 10){
    echo $a . "<br>"; 
    $a++;
}
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/
$skipFive = range(5,100,5);
print_r ($skipFive);
echo "<br>";
/*
Use for-loop and if-statement to print all odd numbers.

How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
 $odd= "";
 $even= "";

for ($skipFive = 0; $skipFive <= 100; $skipFive += 5) {
    if ($skipFive%2==0) {
    $even.=$skipFive."  ";
    } else {
    $odd.=$skipFive." "; 
	}
}
echo "$odd";
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$favFood = array('Pasta','Bread','Pizza','Cheese');
print_r($favFood);
echo "<br><br>";
/*
Use while-loop to print array elements (every food in a new row).
*/
$row = 0;
while ($row === 0) {
	echo "$favFood[0]"."<br>";
	$row ++;
	echo "$favFood[1]"."<br>";
	$row ++;
	echo "$favFood[2]"."<br>";
	$row ++;
	echo "$favFood[3]"."<br>";
	$row ++;
}
echo "<br>";
/*
Use for-loop to print array elements (every food in a new row).
*/
for ($row = 0; $row <= 3; $row ++) { 
	if ($row === 0) {
		echo "$favFood[0]"."<br>";
	} else if ($row === 1) {
		echo "$favFood[1]"."<br>";
	} else if ($row === 2) {
		echo "$favFood[2]"."<br>";
	} else {
		echo "$favFood[3]"."<br>";
	}
}
echo "<br>";
/*
Use foreach-loop to print array elements (every food in a new row).
*/
foreach ($favFood as $a) {
	echo "$a <br>";
}
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/
$a = 0;
echo "<ul>";
for ($a = 0; $a <= 3; $a ++) { 
	if ($a === 0) {
		echo "<li>$favFood[0]</li>";
	} else if ($a === 1) {
		echo "<li>$favFood[1]</li>";
	} else if ($a === 2) {
		echo "<li>$favFood[2]</li>";
	} else {
		echo "<li>$favFood[3]</li>";
	}
}
echo "</ul>";
// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/
$favFood_assoc = [
	"Pasta" => [
    	"type" => "Main",
    	"origin" => "Italy"
  	],
  	"Bread" => [
    	"type" => "Side",
    	"origin" => "Italy"
  	],
  	"Pizza" => [
  		"type" => "Main",
    	"origin" => "Italy"
  	], 
  	"Cheese" => [
  		"type" => "Side",
    	"origin" => "Italy"
  	]
];
/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/
print_r($favFood_assoc);
/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/
echo "<br><br> The Best Foods: 
<ul>";
foreach ($favFood_assoc as $a => $val) {
    echo "<li>" . $a . "</li>
    <ul>" . "<li>" . $val['type'] . "</li>
    <li>" . $val['origin'] . "</li>
    </ul>";
}
echo "</ul>";
?>