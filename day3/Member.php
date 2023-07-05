<?php
class Member
{
    public $name;
    public  $title;
    public $wage;
    public function print()
    {
        echo "Hello, my name is $this->title, $this->name";
    }
}
$joe = new Member();
$joe->name = "Joe Biden";
$joe->title = "Mr.";
$joe->wage = 100000;
$joe->print();
