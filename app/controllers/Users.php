<?php

class Users {
    public function __construct() {
    }

    public function  register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
        } else {
            // Load form
            echo 'load form';
        }
    }
}