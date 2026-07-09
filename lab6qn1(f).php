<?php
class Student
{
    function college()
    {
        echo "Student: Himani<br>";
    }
}

class BCA extends Student
{
    function semester()
    {
        echo "Semester: Fourth";
    }
}

$obj = new BCA();

$obj->college();
$obj->semester();
?>