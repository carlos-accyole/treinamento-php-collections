<?php

//use Ds\Vector;

$array = new SplFixedArray(32769);
for ($i = 0; $i < 32769; $i++) {
    $array[$i] = $i;
}

//utilizando vector
//$array = new Vector();
//$array->allocate(32769);

//for ($i = 0; $i < 32769; $i++) {
//    $array->push($i);
//}

//$array = new SplDoublyLinkedList();
//for ($i = 0; $i < 32769; $i++) {
//    $array->push($i);
//}


var_dump(memory_get_usage() / 1024 / 1024);