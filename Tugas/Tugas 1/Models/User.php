<?php

namespace Models;

class User {
    private $userName;
    private $email;

    public function __construct($userName, $email) {
        $this->userName = $userName;
        $this->email = $email;
    }

    public function userInfo() {
        return "Nama: $this->userName, Email: $this->email";
    }

    public function getUserName() {
        return $this->userName;
    }

    public function getEmail() {
        return $this->email;
    }
}
