<?php
require_once '../core/Model.php';
class UserModel extends Model {
    public function getUsers() {
        $db = $this->dbConnect();
        $stmt = $db->query('SELECT * FROM user');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}