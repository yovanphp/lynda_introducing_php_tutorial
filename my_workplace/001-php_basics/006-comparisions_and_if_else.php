<?php
$flag = 'Y';
if($flag == 'Y')
	echo 'Y';
elseif($flag == 'N')
	echo 'N';
else echo 'N/A';

echo '<br>';

echo "3 == '3': ";
echo 3 == '3';

echo '<br>';

echo "3 === '3': ";
echo 3 === '3';

echo '<br>';

if($flag == 'Y') :
	echo 'Y <br>';
	echo 'This is a second line';
elseif($flag == 'N') :
	echo 'N <br>';
	echo 'Today is Sunday';
else :
	echo 'Kawobunga <br>';
	echo 'Bazinga <br>';
endif;