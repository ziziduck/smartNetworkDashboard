<?php
require_once __DIR__ . '/../../core/controller.php';

class homeController extends controller {
    public function index() {
        $this->view('home/index', ['title' => 'Welcome to Smart Network Dashboard']);
    }
}
