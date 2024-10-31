<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Student yang mewarisi dari Person dan menambahkan atribut studentID serta metode getStudentID()
class Student extends Person {
    protected $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari kelas induk (Person)
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return $this->studentID;
    }
}

// Membuat objek dari kelas Student
$student = new Student("Eka Wulan Yuniarsih", "230202059");

// Menampilkan nama dan studentID dari objek Student
echo "Name: " . $student->getName() . "\n";
echo "Student ID: " . $student->getStudentID() . "\n";
?>