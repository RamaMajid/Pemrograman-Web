<?php

namespace Controller;

use Models\OnlineCourse;
use Models\User;

class CourseController{
    private $listCourse = [];
    private $listUser = [];

    public function addCourse($courseName, $duration, $platform){
        $course = new OnlineCourse($courseName, $duration, $platform);
        $this->listCourse[] = $course;
        return $course;
    }

    public function addUser($userName, $email){
        $user = new User($userName, $email);
        $this->listUser[] = $user;
        return $user;
    }

    public function showCourse(){
        foreach($this->listCourse as $course){
            echo $course . "\n";
        }
    }

    public function showUser(){
        foreach($this->listUser as $user){
            echo $user->userInfo() . "\n";
        }
    }

}