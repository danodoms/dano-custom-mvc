<?php
class Model {
    protected function dbConnect() {
        return new PDO('mysql:host=localhost;dbname=v11_attendance_system', 'root', '');
    }
}