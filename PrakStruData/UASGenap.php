<?php

session_start();

// Validasi dan sanitasi input
function validate_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

class Node {
    public $data;
    public $next;

    public function __construct($d) {
        $this->data = $d;
        $this->next = null;
    }
}

class SLLCircular {
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
        $newNode = new Node(validate_input($d));
        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
            $newNode->next = $newNode; // circular link
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
            $this->tail->next = $this->head; // update tail link
        }
    }

    public function insertB($d) {
        $newNode = new Node(validate_input($d));
        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
            $newNode->next = $newNode; // circular link
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
            $newNode->next = $this->head; // circular link
        }
    }

    public function hapusD() {
        if (!$this->isEmpty()) {
            if ($this->head === $this->tail) { // only one node
                $this->head = $this->tail = null;
            } else {
                $this->head = $this->head->next;
                $this->tail->next = $this->head; // update tail link
            }
        }
    }

    public function tampil() {
        if ($this->isEmpty()) {
            echo "Maaf data Kosong";
        } else {
            $temp = $this->head;
            echo "<ul>";
            do {
                echo "<li>" . $temp->data . "</li>";
                $temp = $temp->next;
            } while ($temp != $this->head);
            echo "</ul>";
        }
    }
}

if (!isset($_SESSION['list']) || empty($_SESSION['list'])) {
    $_SESSION['list'] = new SLLCircular();
}

// Menangani aksi penghapusan data
if (isset($_GET['menu']) && $_GET['menu'] == "hapusD") {
    deleteD();
}

function deleteD() {
    if (!empty($_SESSION['list'])) {
        $_SESSION['list']->hapusD();
        echo "<p>Data pertama berhasil dihapus</p>";
    } else {
        echo "<p>Data link list masih kosong</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLL Circular</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h3 {
            margin-top: 10px;
        }
        form {
            margin-bottom: 10px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <h4>+++++Single Linked List Circular dengan Head dan Tail+++++</h4>
    <h4>MENU :</h4>
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
            <form method="post">
                <label for="data">Masukan Data</label><br>
                <input type="text" name="data" id="data" required><br>
                <input type="submit" name="submit" value="Simpan Data">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $data = $_POST['data'];
                $_SESSION['list']->insertD($data);
                echo "<p>Data berhasil ditambahkan di depan</p>";
            }
        } elseif ($menu == "insertB") {
            ?>
            <h3>Tambah Data di Belakang</h3>
            <form method="post">
                <label for="data">Masukan Data : </label>
                <input type="text" name="data" id="data" required><br>
                <input type="submit" name="submit" value="Simpan Data">
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $data = $_POST['data'];
                $_SESSION['list']->insertB($data);
                echo "<p>Data berhasil ditambahkan di Belakang</p>";
            }
        } elseif ($menu == "tampil") {
            ?>
            <h3>Daftar Data : </h3><br>
            <?php $_SESSION['list']->tampil(); ?>
            <?php
        }
    }
    ?>
</body>
</html>