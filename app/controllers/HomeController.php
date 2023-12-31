<?php
require_once '../core/Controller.php';
class HomeController extends Controller {
   public function index() {
    $userModel = $this->model('UserModel');
    $users = $userModel->getActiveUsers();
    $attendanceModel = $this->model('AttendanceModel');
    $attendance = $attendanceModel->getAttendance();
    $this->view('home', ['users' => $users, 'attendance' => $attendance]);
}
}