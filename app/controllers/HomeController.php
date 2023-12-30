<?php
require_once '../core/Controller.php';
class HomeController extends Controller {
    public function index() {
        $userModel = $this->model('UserModel');
        $users = $userModel->getUsers();
        $this->view('home', ['users' => $users]);
    }
}