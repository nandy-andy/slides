<?php
class Student {
    public $sex = 'male';
    public $name = 'Steve';
    public $surname = 'Kowalsky';
    public $class = 'geography';
}

$s = new Student();
$property = 'name';
$propertiesArr = array('sex', 'name', 'surname', 'class');

echo "\n\n";
echo $s->$property . ' ';
echo $s->$propertiesArr[2];
echo "\n";

