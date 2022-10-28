<?php
class Person {
    // Private Variables
    private $name;
    private $age;

    // Constructor
    function __constructor() {
        $this->name = "";
        $this->age = 0;
    }

    // Setter Functions
    function setName(string $firstName, string $lastName) {
        $this->name = $firstName . $lastName;
    }

    function setAge(int $age) {
        $this->age = $age;
    }

    // Getter Functions
    function getName() {
        return $this->name;
    }

    function getAge() {
        return $this->age;
    }
}
?>