<?php
// Membuat kelas Node yang berfungsi sebagai elemen dalam linked list
class Node {
    public $data, $prev, $next;

    // Konstruktor untuk menginisialisasi node dengan data
    public function __construct($d) {
        $this->data = $d;
    }
}

// Membuat kelas DLLC untuk mengelola linked list ganda sirkular
class DLLC {
    private $head;

    
    // Metode untuk menambahkan data di depan
    public function insertD($d) {
        // Membuat node baru
        $newNode = new Node($d);
        $newNode->next = $newNode;
        $newNode->prev = $newNode;

        // Jika linked list kosong
        if ($this->head == null) {
            $this->head = $newNode;
            $this->head->next = $this->head;
            $this->head->prev = $this->head;
        } else {
            // Jika linked list tidak kosong
            $temp = $this->head->prev;
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
            $this->head->prev = $temp;
            $temp->next = $this->head;
        }
    }

    // Metode untuk menambahkan data di belakang
    public function insertB($d) {
        $newNode = new Node($d);
        $newNode->next = $newNode;
        $newNode->prev = $newNode;

        // Jika linked list kosong
        if ($this->head == null) {
            $this->head = $newNode;
            $this->head->next = $this->head;
            $this->head->prev = $this->head;
        } else {
            // Jika linked list tidak kosong
            $temp = $this->head->prev;
            $temp->next = $newNode;
            $newNode->prev = $temp;
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
        }
    }

    // Metode untuk menghapus node dari depan
    public function hapusD() {
        if ($this->head != null) {
            // Jika hanya ada satu node
            if ($this->head->next == $this->head) {
                $this->head = null;
            } else {
                // Jika lebih dari satu node
                $del = $this->head;
                $temp = $del->prev;
                $this->head = $this->head->next;
                $temp->next = $this->head;
                $this->head->prev = $temp;
                unset($del);
            }
        }
    }

    // Metode untuk menghapus node dari belakang
    public function hapusB() {
        if ($this->head == null) {
            return "Link list kosong";
        }

        // Jika hanya ada satu node
        if ($this->head->next == $this->head) {
            $this->head = null;
        } else {
            // Jika lebih dari satu node
            $del = $this->head->prev;
            $temp = $del->prev;
            $temp->next = $this->head;
            $this->head->prev = $temp;
            unset($del);
        }
    }

    // Metode untuk mencetak semua data dalam linked list
    public function printL() {
        $curr = $this->head;
        if ($this->head != null) {
            do {
                echo $curr->data . " ";
                $curr = $curr->next;
            } while ($curr != $this->head);
        } else {
            return "Link list kosong";
        }
    }

    // Metode untuk menghapus semua node dalam linked list
    public function clear() {
        if ($this->head == null) {
            return "Link list kosong";
        }
        $temp = $this->head;
        do {
            $del = $temp;
            $temp = $temp->next;
            unset($del);
        } while ($temp != $this->head);
        $this->head = null;
        echo "Link list berhasil dihapus";
    }
}

// Contoh penggunaan kelas DLLC
$cl = new DLLC();
$cl->insertD(11);
$cl->insertD(55);
$cl->insertB(33);
$cl->insertB(44);
echo "Isi linked list: ";
$cl->printL();

echo "<hr><br>Hapus node pertama<br>";
$cl->hapusD();
echo "Isi linked list setelah dihapus: ";
$cl->printL();

echo "<hr><br>Hapus node terakhir<br>";
$cl->hapusB();
echo "Isi linked list setelah dihapus: ";
$cl->printL();

echo "<hr><br>Hapus semua node<br>";
$cl->clear();
echo "<hr><br>Isi linked list setelah dihapus : ";
$cl->printL();
?>
