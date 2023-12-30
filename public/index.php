<?php
require_once '../core/Controller.php';
require_once '../core/Model.php';
require_once '../app/controllers/HomeController.php';


require_once '../app/views/template/header.php'; // Include the header
$controller = new HomeController();
$controller->index();

