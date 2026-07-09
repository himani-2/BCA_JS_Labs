<?php
class Student
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function display()
    {
        echo "Student Name: " . $this->name;
    }
}

$s1 = new Student("Himani");
$s1->display();
?>