<?php
class Node {// Struktur node
    public $data;//Menyimpan data node.
    public $next;//Penunjuk ke node berikutnya.
    public $prev;//Penunjuk ke node berikutnya.

    function __construct($data) {
        $this->data = $data;
        $this->next = NULL;
        $this->prev = NULL;
    }
}


class DoubleLinkedList {// Kelas Double Linked List
    private $head;
    private $tail;

    function __construct() {
        $this->head = NULL;
        $this->tail = NULL;
    }

    function insertD($data) {// Memasukkan node baru di depan list
        $newNode = new Node($data);

        if ($this->head == NULL) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    function insertB($data) {  // Memasukkan node baru di belakang list
        $newNode = new Node($data);

        if ($this->head == NULL) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
        }
    }

    function HapusD() { // Menghapus node pertama
        if ($this->head == NULL) {
            echo "Linked list kosong";
            return;
        }

        $this->head = $this->head->next;
        if ($this->head != NULL) {
            $this->head->prev = NULL;
        } else {
            $this->tail = NULL;
        }
    }

    function HapusB() {// Menghapus node terakhir
        if ($this->head == NULL) {
            echo "Linked list kosong";
            return;
        }

        $this->tail = $this->tail->prev;
        if ($this->tail != NULL) {
            $this->tail->next = NULL;
        } else {
            $this->head = NULL;
        }
    }

    function clear() {// Menghapus semua node
        $current = $this->head;
        while ($current != NULL) {
            $next = $current->next;
            $current = NULL;
            $current = $next;
        }

        $this->head = NULL;
        $this->tail = NULL;
    }

    function printList() {// Menampilkan isi linked list
        if ($this->head == NULL) {
            echo "Linked list kosong";
            return;
        }

        $current = $this->head;
        while ($current != NULL) {
            echo $current->data . " ";
            $current = $current->next;
        }
    }
}

$dll = new DoubleLinkedList();// Contoh penggunaan

$dll->insertD(11);
$dll->insertD(55);
$dll->insertD(33);
$dll->insertB(44);

echo "Isi linked list: ";
$dll->printList();

echo "<hr><br>Hapus node pertama<br>";
$dll->HapusD();

echo "Isi linked list setelah dihapus: ";
$dll->printList();

echo "<hr><br>Hapus node terakhir<br>";
$dll->HapusB();

echo "Isi linked list setelah dihapus: ";
$dll->printList();

echo "<hr>Hapus semua node<br>";
$dll->clear();

echo "<br>Isi linked list setelah dihapus:";
$dll->printList();
?>