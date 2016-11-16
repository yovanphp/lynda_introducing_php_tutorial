<?php 
echo 0 == false ? '0 is falsy' : '0 is truthy';
echo '<br>';

echo 0.0 == false ? '0.0 is falsy' : '0.0 is truthy';;
echo '<br>';

echo '0' == false ? '"0" is falsy' : '"0" is truthy';
echo '<br>';

echo '0.0' == false ? '"0.0" is falsy' : '"0.0" is truthy';;
echo '<br>';

echo '' == false ? "'' is falsy" : "'' is truthy";
echo '<br>';

echo "" == false ? '"" is falsy' : '"" is truthy';;
echo '<br>';

echo NULL == false ? 'NULL is falsy' : 'NULL is truthy';;
echo '<br>';

echo [] == false ? '[] is falsy' : '[] is truthy';;
echo '<br>';

echo 'false' == false ? '"false" is falsy' : '"false" is truthy';;
echo '<br>';

//Unset values are false but they will raise an error if we try to access them.
//$empty == false;
echo '<br>';
