<?php
// Kelas Person dengan atribut name dan metode getName()
class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

// Kelas Student yang mewarisi dari Person dan menambahkan atribut studentID
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name); // Memanggil constructor dari kelas induk (Person)
        $this->studentID = $studentID;
    }

    // Getter untuk studentID
    public function getStudentID() {
        return $this->studentID;
    }

    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Membuat objek dari kelas Student
$student = new Student("Alice", "S12345");

// Menampilkan nama dan studentID dari objek Student
echo "Name: " . $student->getName() . "<br>"; // Output: Name: Alice
echo "Student ID: " . $student->getStudentID() . "<br>"; // Output: Student ID: S12345

// Mengubah name dan studentID
$student->setName("Meilita");
$student->setStudentID("S67890");

// Menampilkan nama dan studentID yang telah diubah
echo "Updated Name: " . $student->getName() . "<br>"; // Output: Updated Name: Bob
echo "Updated Student ID: " . $student->getStudentID() . "<br>"; // Output: Updated Student ID: S67890
?>