<?php 
/*
	1. Compared to indexed array where each element in the array is identified by an integer (its index), in an associative array, elements are identified by their respectives keys, which are strings.
	2. Associative arrays are a key/value pair. The keys are unique strings.
	3. We can add a new element to an associative array like this assoc['new_key'] = 'new_value';
 */

$data = [
	'company' => 'Acme Inc.',
	'employees' => ['Jack Nicolas', 'Yovan Juggoo', 'Pierrette Louis', 'Jane Doe'],
	'is_private' => true
];

var_dump($data);

forEach($data as $fields => $value) {
	if(gettype($value) == 'array') {
		forEach($value as $val) {
			echo $val . '<br>';
		} 
	}
	else echo "{$fields}: {$value} <br>";
}

$data ['owner'] = 'Jean Pierre';

var_dump($data);

echo "The owner of {$data['company']} is: {$data['owner']}";