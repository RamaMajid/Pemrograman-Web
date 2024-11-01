<?php

require_once 'Traits/LoggingTrait.php';
require_once 'Models/Course.php';
require_once 'Models/OnlineCourse.php';
require_once 'Models/User.php';
require_once 'Controller/CourseController.php';

use Controller\CourseController;

$controller = new CourseController();


$controller->addCourse("Pemrograman PHP", 20, "HI");
$controller->addCourse("Pemrograman JavaScript", 15, "HE");
$controller->addCourse("UI/UX", 25, "HA");


$controller->addUser("Mel", "Mel@gmail.com");
$controller->addUser("Yasha", "Yasha@gmail.com");


echo "Daftar Kursus:\n";
$controller->showCourse();
echo "\n";


echo "Daftar Pengguna:\n";
$controller->showUser();
