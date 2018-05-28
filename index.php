<?php
require_once 'cat_class.php';
$cat = new Cat('garfield');

echo $cat->getName('garfield').'</br>';
if($cat->getName('garfield') === 'garfield') echo 'true'.'</br>';
else echo 'folse'.'</br>'; // true;

echo $cat->meow('garfield'); // 'Cat garfield is saying meow' // true;
?>