<?php

namespace Models;

use \Traits\LoggingTrait;

class OnlineCourse extends Course {
    use LoggingTrait;

    private $platform;

    public function __construct($courseName, $duration, $platform) {
        parent::__construct($courseName, $duration);
        $this->platform = $platform;
    }

    public function description() {
        return "Kursus Online: {$this->courseName} di platform {$this->platform} selama {$this->duration} jam";
    }

    public function __toString() {
        return $this->description();
    }

    public function getPlatform() {
        return $this->platform;
    }
}
