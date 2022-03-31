<?php
class Pages extends Controller {
    public function __construct() {
    }
    public function index() {


        $data = [
            'title' => 'SharePosts',
            'description' => 'Simple Social Network'
        ];

        $this->view('pages/index', $data);
    }
    public function about() {
        $data = [
            'title' => 'About',
            'description' => 'Simple Website made for sharing posts'
        ];
        $this->view('pages/about', $data);
    }
}
