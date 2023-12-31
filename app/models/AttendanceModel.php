<?php

require_once '../core/Model.php';

class AttendanceModel extends Model {

    // Get attendance from the database
    public function getAttendance() {
        $db = $this->dbConnect();
        
        // Query to fetch attendance data
        $query = "SELECT dtrDate, day, name, timeInAm, timeOutAm, timeInPm, timeOutPm FROM attendance_summary_view LIMIT 20";

        // Prepare statement
        $stmt = $db->prepare($query);

        // Execute query
        $stmt->execute();

        // Fetch all rows
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Return the result
        return $result;
    }
}
