<?php
require_once "Employee.php";
$joe = new Employee($name, $title);
$joe->setName("Joe Biden");
$joe->sayHello();

