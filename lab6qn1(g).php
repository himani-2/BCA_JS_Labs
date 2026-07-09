<?php
class Student
{
    public $name = "Himani";

    function display()
    {
        echo "Student Name: " . $this->name;
    }
}

$s = new Student();
$s->display();
?>