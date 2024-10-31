<?php
class Node {// Struktur node
    public $data;//Menyimpan data node.
    public $next;//Penunjuk ke node berikutnya.
    public $prev;//Penunjuk ke node sebelumnya.

    function __construct($data) {
        $this->data = $data;
        $this->next = NULL;
        $this->prev = NULL;
    }
}
class DoubleLinkedList {// Kelas Double Linked List
    private $head;

    function __construct() {
        $this->head = NULL;
    }

    function insertD($data) { // Memasukkan node baru di depan list
        $newNode = new Node($data);

        if ($this->head == NULL) {
            $this->head = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    function insertB($data) { // Memasukkan node baru di belakang list
        $newNode = new Node($data);

        if ($this->head == NULL) {
            $this->head = $newNode;
        } else {
            $current = $this->head;
            while ($current->next != NULL) {
                $current = $current->next;
            }

            $current->next = $newNode;
            $newNode->prev = $current;
        }
    }

    function HapusD() {  // Menghapus node pertama
        if ($this->head == NULL) {
            echo "Linked list kosong";
            return;
        }

        $this->head = $this->head->next;
        if ($this->head != NULL) {
            $this->head->prev = NULL;
        }
    }
    function HapusB() {// Menghapus node terakhir
        if ($this->head == NULL) {
            echo "Linked list kosong";
            return;
        }

        $current = $this->head;
        while ($current->next != NULL) {
            $current = $current->next;
        }

        $current->prev->next = NULL;
        $current = NULL;
    }
    function clear() {    // Menghapus semua node
        $current = $this->head;
        while ($current != NULL) {
            $next = $current->next;
            $current = NULL;
            $current = $next;
        }

        $this->head = NULL;
    }

    function printList() {//menampilkan isi linked list
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

$dll = new DoubleLinkedList();// Contoh penggunaan doublelinkedlist


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

echo "Isi linked list setelah dihapus:";
$dll->printList();
?>