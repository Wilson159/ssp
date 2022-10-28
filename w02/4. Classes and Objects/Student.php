require_once 'Person.php';

<?php
class Student extends Person {
    private $studentId;

    function setStudentId($studentId) {
        $this->studentId = $studentId;
    }

    function getStudentId() {
        return $this->studentId;
    }
}
?>