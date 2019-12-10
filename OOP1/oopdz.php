<?php
include('Direction.php');
include('Course.php');
include('Group.php');

$students = new Group("developer", "php", "6 month", 4400, 'Andrew Zhivitsky', 'Ivan');
print_r($students->getStudents()) ;
print_r($students);


