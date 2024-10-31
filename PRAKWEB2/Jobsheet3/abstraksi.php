<?php
// Kelas abstrak Course dengan metode abstrak getCourseDetails()
abstract class Course {
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan getCourseDetails()
class OnlineCourse extends Course {
    private $courseName;
    private $duration;

    public function __construct($courseName, $duration) {
        $this->courseName = $courseName;
        $this->duration = $duration;
    }

    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . ", Duration: " . $this->duration . " hours";
    }
}

// Kelas OfflineCourse yang mengimplementasikan getCourseDetails()
class OfflineCourse extends Course {
    private $courseName;
    private $location;

    public function __construct($courseName, $location) {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . ", Location: " . $this->location;
    }
}

// Membuat objek dari OnlineCourse
$onlineCourse = new OnlineCourse("PHP Programming", 20);

// Membuat objek dari OfflineCourse
$offlineCourse = new OfflineCourse("Web Development", "Jakarta");

// Menampilkan output
echo $onlineCourse->getCourseDetails(); // Output: Online Course: PHP Programming, Duration: 20 hours
echo "<br>";
echo $offlineCourse->getCourseDetails(); // Output: Offline Course: Web Development, Location: Jakarta
?>
