<?php

namespace Models;

abstract class Course{
    protected $courseName;
    protected $duration;

    public function __construct($courseName, $duration){
        $this->courseName;
        $this->duration;
    }

    abstract public function description();
}