<?php

require_once('child.php');

$obj1= new Child('SAM','22','php');

$obj2=new Page('SAM','22','php');



$obj2->body="Hello eveyone";


echo $obj2->displaymyhtmlpage();

echo $obj2->displayPage();

echo $obj1->displayUserSubject();

?>
