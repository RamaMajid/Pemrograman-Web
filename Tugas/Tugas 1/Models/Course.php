<?php

namespace Models;

abstract class Course {
    protected $courseName;
    protected $duration;

    public function __construct($courseName, $duration) {
        $this->courseName = $courseName;
        $this->duration = $duration;
    }

    abstract public function description();

    public function getCourseName() {
        return $this->courseName;
    }

    public function getDuration() {
        return $this->duration;
    }
}
