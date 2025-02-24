<?php

abstract class Person {
    protected $name;
    protected $address;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->address;
    }

    abstract public function toString();
}


class Student extends Person {
    private $program;
    private $year;
    private $fee;

    public function __construct($name, $address, $program, $year, $fee) {
        parent::__construct($name, $address);
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function setProgram($program) {
        $this->program = $program;
    }

    public function getProgram() {
        return $this->program;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    public function setFee($fee) {
        $this->fee = $fee;
    }

    public function getFee() {
        return $this->fee;
    }

    public function toString() {
        return "Student[Person[name={$this->name}, address={$this->address}], program={$this->program}, year={$this->year}, fee={$this->fee}]";
    }
}


class Staff extends Person {
    private $school;
    private $pay;

    public function __construct($name, $address, $school, $pay) {
        parent::__construct($name, $address);
        $this->school = $school;
        $this->pay = $pay;
    }

    public function setSchool($school) {
        $this->school = $school;
    }

    public function getSchool() {
        return $this->school;
    }

    public function setPay($pay) {
        $this->pay = $pay;
    }

    public function getPay() {
        return $this->pay;
    }

    public function toString() {
        return "Staff[Person[name={$this->name}, address={$this->address}], school={$this->school}, pay={$this->pay}]";
    }
}


$student = new Student("aya", "Egypt", "dr", 2, 60000);
echo $student->toString() . "\n"."<br>";

$staff = new Staff("omar", "monofia", "sw", 1000000);
echo $staff->toString() . "\n";

?>
