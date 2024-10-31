<?php
// Membuat kelas Node yang berfungsi sebagai elemen dalam linked list
class Node {
    public $data;
    public $next;
    public $prev;

    // Konstruktor untuk menginisialisasi node dengan data
    public function __construct($d) {
        $this->data = $d;
        $this->next = $this;
        $this->prev = $this;
    }
}

// Membuat kelas DLLNCH untuk mengelola linked list ganda sirkular
class DLLNCH {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function LEmpty() {
        if ($this->head == null)
            return 1;
        else
            return 0;
    }

    // Metode untuk menambahkan data di depan
    public function insertD($d) {
        // Membuat node baru
        $newNode = new Node($d);
        $newNode->data = $d;
        $newNode->next = $newNode;
        $newNode->prev = $newNode;

        // Jika linked list kosong
        if ($this->LEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->head->next = $this->head;
            $this->head->prev = $this->head;
        } else {
            // Jika linked list tidak kosong
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
            $this->head->prev = $this->tail;
            $this->head->prev = $this->head;
        }
    }

    // Metode untuk menambahkan data di belakang
    public function insertB($d) {
        $newNode = new Node($d);
        $newNode->data = $d;
        $newNode->next = $newNode;
        $newNode->prev = $newNode;

        // Jika linked list kosong
        if ($this->LEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->head->next = $this->head;
            $this->head->prev = $this->head;
        } else {
            // Jika linked list tidak kosong
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
            $this->head->prev = $this->tail;
        }
    }

    // Metode untuk menghapus node dari depan
    public function hapusD() {
        if (!$this->LEmpty()) {
            // Jika hanya ada satu node
            if ($this->head->next == $this->head) {
                $this->head = $this->tail = null;
            } else {
                // Jika lebih dari satu node
                $hapus = $this->head;
                $this->head = $this->head->next;
                $this->head->prev = $this->head;
                $this->head->prev = $this->tail;
                unset($hapus);
            }
        } else {
            echo "<br>LIST kosong";
        }
    }

    // Metode untuk menghapus node dari belakang
    public function hapusB() {
        if ($this->head == null) {
            echo "Linked list kosong\n";
            return;
        }

        // Jika hanya ada satu node
        if ($this->head->next == $this->head) {
            $this->head = $this->tail = null;
            return;
        } else {
            // Jika lebih dari satu node
            $hapus = $this->tail;
            $this->tail = $this->tail->prev;
            $this->tail->next = $this->head;
            $this->head->prev = $this->tail;
            unset($hapus);
        }
    }

    // Metode untuk mencetak semua data dalam linked list
    public function printList() {
        $current = $this->head;
        if (!$this->LEmpty()) {
            do {
                echo $current->data . " ";
                $current = $current->next;
            } while ($current != $this->head);
        } else {
            echo "List kosong";
        }
    }

    // Metode untuk menghapus semua node dalam linked list
    public function clear() {
        if ($this->LEmpty()) {
            echo"Link list kosong\n";
            return;
        }
        $temp = $this->head;
        $hapus = null;
        do {
            $hapus = $temp;
            $temp = $temp->next;
            unset($hapus);
        } while ($temp != $this->head);
        $this->head = null;
        echo "Link list berhasil dihapus\n";
    }
}

// Contoh penggunaan kelas DLLNCH
$Cl = new DLLNCH();
$Cl->insertD(11);// memasukan nilai 11
$Cl->insertD(55);// memasukan nilai 55
$Cl->insertB(33);// memasukan nilai 33
$Cl->insertB(44);// memasukan nilai 44
echo "Isi linked list: ";
$Cl->printList();

echo "<hr><br>Hapus node pertama<br>";
$Cl->hapusD();// menghapus data D
echo "Isi linked list setelah dihapus: ";
$Cl->printList();// melakukan print data

echo "<hr><br>Hapus node terakhir<br>";
$Cl->hapusB();// menghapus data B
echo "Isi linked list setelah dihapus: ";
$Cl->printList();

echo "<hr><br>Hapus semua node<br/>";
$Cl->clear();// menghapus semua data
echo "<hr><br>Isi linked list setelah dihapus : <br/>";
$Cl->printList();
?>