<?php

require_once 'Trait/LoggingTrait.php';
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


header('Content-Type: application/json');
echo json_encode([
    "DaftarKursus" => json_decode($controller->getCoursesAsJson(), true),
    "DaftarPengguna" => json_decode($controller->getUsersAsJson(), true)
], JSON_PRETTY_PRINT);
