<?php

session_start();

// Validasi dan sanitasi input
function validasi_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

class Node {
    public $data;
    public $next;
    public $prev;

    public function __construct($d) {
        $this->data = $d;
        $this->next = null;
        $this->prev = null;
    }
}

class DLL {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty() {
        return ($this->head == null);
    }

    public function insertD($d) {
        $newNode = new Node(validasi_input($d));
        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    public function insertB($d) {
        $newNode = new Node(validasi_input($d));
        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
        } else {
            $newNode->prev = $this->tail;
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }

    public function hapusD() {
        if (!$this->isEmpty()) {
            if ($this->head === $this->tail) { // hanya satu node
                $this->head = $this->tail = null;
            } else {
                $this->head = $this->head->next;
                $this->head->prev = null;
            }
        }
    }

    public function tampil() {
        if ($this->isEmpty()) {
            echo "Maaf data Kosong";
        } else {
            $temp = $this->head;
            echo "<ul>";
            while ($temp != null) {
                echo "<li>" . $temp->data . "</li>";
                $temp = $temp->next;
            }
            echo "</ul>";
        }
    }
}

// Cek apakah variabel sesi 'list' ada dan merupakan string yang valid
if (isset($_SESSION['list']) && is_string($_SESSION['list'])) {
    $list = unserialize($_SESSION['list']);
    // Jika unserialize gagal, $list akan bernilai false
    if ($list === false) {
        $list = new DLL();
    }
} else {
    $list = new DLL();
}

$_SESSION['list'] = serialize($list);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Double Linked List Non-Circular dengan Head dan Tail</title>
</head>
<body>
    <h2>+++++Double Linked List Non-Circular dengan Head dan Tail+++++</h2>
    <ol>
        <li><a href="?menu=insertD">TAMBAH DATA DI DEPAN</a></li>
        <li><a href="?menu=insertB">TAMBAH DATA DI BELAKANG</a></li>
        <li><a href="?menu=hapusD">HAPUS DATA DEPAN</a></li>
        <li><a href="?menu=tampil">CETAK DATA</a></li>
    </ol>

    <?php
    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];
        if ($menu == 'insertD') {
            ?>
            <h3>Tambah Data di Depan</h3>
            <form method="post" action="?menu=insertD">
                <label for="data">Masukan Data</label><br>
                <input type="text" name="data" id="data" required><br>
                <input type="submit" name="submit" value="Simpan Data">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['data'])) {
                $data = $_POST['data'];
                $list->insertD($data);
                $_SESSION['list'] = serialize($list);
                echo "<p>Data berhasil ditambahkan di depan</p>";

            }
        } elseif ($menu == "insertB") {
            ?>
            <h3>Tambah Data di Belakang</h3>
            <form method="post" action="?menu=insertB">
                <label for="data">Masukan Data : </label>
                <input type="text" name="data" id="data" required><br>
                <input type="submit" name="submit" value="Simpan Data">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['data'])) {
                $data = $_POST['data'];
                $list->insertB($data);
                $_SESSION['list'] = serialize($list);
                echo "<p>Data berhasil ditambahkan di Belakang</p>";
            }
        } elseif ($menu == "hapusD") {
            $list->hapusD();
            $_SESSION['list'] = serialize($list);
            echo "<p>Data di depan berhasil dihapus</p>";
        } elseif ($menu == "tampil") {
            ?>
            <h3>Daftar Data : </h3><br>
            <?php
            $list->tampil();
        }
    }
    ?>
</body>
</html>