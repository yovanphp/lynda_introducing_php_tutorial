<?php
//20 is assigned here as 0 is a falsy value. This is not that we want sometimes. 
//If $unit_cost is not defined an error is raised. 
//Below is a better solution - PHP 7 and PHP 5
$unit_cost = 0;
$whole_sale = $unit_cost ?: 20;
echo "\$whole_sale: {$whole_sale} <br>";

/*
	The null coaless operator.
	This operator exists only in PHP 7.
	If the value on the left is 0 , 0 is assigned 
	and if value is NULL, no error is raised 
	and the value to the right is assigned to the variable.
 */
/*$whole_sale = $unit_cost ?? $non_existent ?? 25;
echo "\$whole_sale: {$whole_sale} <br>";*/

//Best way to do the above 
$whole_sale = isset($unit_cost) && $unit_cost ? $unit_cost : 20;
echo "\$whole_sale: {$whole_sale} <br>";
$whole_sale = isset($unit_cost) ? $unit_cost : 20;
echo "\$whole_sale: {$whole_sale} <br>";
