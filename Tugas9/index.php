<?php

require_once('Animal.php');
require_once('Frog.php');
require_once('Ape.php');

$object = new Animal("shaun");
echo "Name : $object->name <br>";
echo "legs : $object->legs <br>";
echo "cold blooded : " . ($object->cold_blooded ? 'yes' : 'no') . "<br>";

$object2 = new Frog("buduk");
echo "<br> Name : $object2->name <br>";
echo "legs : $object2->legs <br>";
echo "cold blooded : " . ($object2->cold_blooded ? 'yes' : 'no') . "<br>";
echo "Jump : " . $object2->jump() . "<br>";

$object3 = new Ape("kera sakti");
echo "<br> Name : $object3->name <br>";
echo "legs : $object3->legs1 <br>";
echo "cold blooded : " . ($object3->cold_blooded ? 'yes' : 'no') . "<br>";
echo "Yell : " . $object3->yell() . "<br>";
