<?php
require_once '../core/Model.php';

/**
 * The UserModel class represents a model for managing user data.
 */
class UserModel extends Model {
    /**
     * Retrieves all users from the database.
     *
     * @return array An array of user data.
     */
    public function getUsers() {
        $db = $this->dbConnect();
        $stmt = $db->query('SELECT * FROM user');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Retrieves active users from the database.
     *
     * @return array An array of active user data.
     */
    public function getActiveUsers() {
        $db = $this->dbConnect();
        $stmt = $db->query('SELECT name, privilege, email FROM active_employee_view');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
