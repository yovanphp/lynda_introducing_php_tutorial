<?php 
/*
	1. Use <<< followed by an identifier to mark the end of our string (usually we use EOT - end of text)
	2. The text can contain variables and the single/double quotes are preserved.
	3. Finally we close the declaration with EOT;
	4. Note: There should be nothing after EOT at the beginning and EOT; at the end.
 */

$employee_id = 7;
$first_name = 'Yovan'; 

$my_query = <<< EOT
SELECT  * FROM employees AS e INNER JOIN <br>
	profiles AS p ON e.id = p.employee_id <br>
	WHERE e.id = $employee_id OR <br>
		e.first_name = '$first_name';
EOT;

echo $my_query;