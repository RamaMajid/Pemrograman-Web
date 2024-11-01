<?php

namespace Controller;

use Models\OnlineCourse;
use Models\User;

class CourseController {
    private $listCourse = [];
    private $listUser = [];

    public function addCourse($courseName, $duration, $platform) {
        $course = new OnlineCourse($courseName, $duration, $platform);
        $this->listCourse[] = $course;
        return $course;
    }

    public function addUser($userName, $email) {
        $user = new User($userName, $email);
        $this->listUser[] = $user;
        return $user;
    }

    public function getCoursesAsJson() {
        $courses = array_map(function($course) {
            return [
                'courseName' => $course->getCourseName(),
                'duration' => $course->getDuration(),
                'platform' => $course->getPlatform()
            ];
        }, $this->listCourse);

        return json_encode(['courses' => $courses], JSON_PRETTY_PRINT);
    }

    public function getUsersAsJson() {
        $users = array_map(function($user) {
            return [
                'userName' => $user->getUserName(),
                'email' => $user->getEmail()
            ];
        }, $this->listUser);

        return json_encode(['users' => $users], JSON_PRETTY_PRINT);
    }
}
