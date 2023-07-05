<?php
// class Employee
// {
//     private $Name;
//     private $lastName;
//     public function __construct($Name)
//     {
//         $this->Name = $Name;
//     }
//     public function setName()
//     {
//         $Name = $this->Name;
//         return $Name;
//     }
//     public function sayHello()
//     {
//         echo "Hi, my name is {$this->setName()}";
//     }
// }
class Employee
{
    private $name;
    private $title;
    public function __construct($name, $title)
    {
        $this->name = $name;
        $this->title = $title;
    }
    public function setName($value)
    {
        $this->name = $value;
        return $this->name;
    }

    public function sayHello()
    {
        echo "Hi, my name is {$this->name}";
    }
}


// class Employee {
//     private $name;
//     private $title;
//     public function getName(){
//         return $this->name;
//     }
//     public function setName($value){
//         $this->name = $value;
//     }
//     public function sayHello(){
//         echo "Hi, my name is {$this->getName()}";
//     }
// }


