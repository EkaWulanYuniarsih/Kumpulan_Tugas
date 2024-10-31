<?php

class Node {// menampung isi dalam node
    public $data;// menakukan publikasi dari variabel data
    public $next;// menakukan publikasi dari variabel next

    function __construct($data) {// pemanggilan fungsi secara otomatis
        $this->data = $data;
        $this->next = null;
    }
}

class SLLCH {// menampung isi data dalam sllch
    private $head;
    private $tail;

    function __construct() {// pemanggilan data secara otomatis
        $this->head = null;
        $this->tail = null;
    }

    function insertD($data) {// melakukan inisialisasi data dari insert d pada variabel data
        $newNode = new Node($data);// inisialisasi data

        if ($this->head == null) {// melakukanperulangan if else pada data d
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }

    function insertB($data) {// melakukan inisialisasi data dari insert b pada variabel data
        $newNode = new Node($data);

        if ($this->head == null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        }
    }

    function printList() {// memakukan print list untuk mencetak data secara langsung 
        $currentNode = $this->head;

        while ($currentNode != null) {// melakukan perulangan while
            echo $currentNode->data . " ";
            $currentNode = $currentNode->next;

            if ($currentNode == $this->head) {
                break;
            }
        }

        echo "<br>";
    }

    function HapusD() {// melakukan penghapusan data terhadap data d dengan melakukan perulangan if else if
        if ($this->head == null) {
            return;
        } else if ($this->head == $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $this->head = $this->head->next;
            $this->tail->next = $this->head;
        }
    }

    function HapusB() {/* melakukan perulangan if else if
        dan perulangan while dalam menghapus data b*/
        if ($this->head == null) {// perulangan if else if
            return;// mengembalikan nilai ke nilai awal
        } else if ($this->head == $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $currentNode = $this->head;
            $prevNode = null;

            while ($currentNode->next != $this->head) {// melakukan perulangan while
                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }

            $prevNode->next = $this->head;
            $this->tail = $prevNode;
        }
    }

    function clear() {// melakukan pembersihan data secara langsung
        $this->head = null;
        $this->tail = null;
    }
}

$CL = new SLLCH();
$CL->insertD(11);// memasukan nilai 11
$CL->insertD(22);// memasukan nilai 22
$CL->insertD(33);// memasukan nilai 33
$CL->insertB(44);// memasukan nilai 44

echo "Isi linked list:";
$CL->printList();// melakukan print seluruh data

echo "<hr><br> Hapus node pertama<br>";
$CL->HapusD();// menghapus data d
echo "Isi linked setelah dihapus:";
$CL->printList();// melakukan print seluruh data setelah data pertama dihapus

echo "<hr><br> Hapus node terakhir<br>";
$CL->HapusB();// menghapus data b
echo "Isi linked setelah dihapus:";
$CL->printList();// melakukan print seluruh data setelah data terakhir dihapus

echo "<hr><br> Hapus semua node<br>";
$CL->clear();// menghapus seluruh data yang tersisa
echo "Isi linked setelah dihapus:";
echo "List kosong";
$CL->printList();// melakukan print seluruh data setelah seluruh data dihapus

?>
