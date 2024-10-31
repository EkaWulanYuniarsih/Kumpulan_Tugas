<?php
class Node {
    public $data;
    public $next;

    public function __construct($d) {
        $this->data = $d;
        $this->next = null;
    }
}

class SLLCH {
    private $head;
    private $tail;
    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function insertD($d) {
        $newNode = new Node($d);
        if ($this->head == null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
        }
    }
    public function insertB($d) {
        $newNode = new Node($d);
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
    public function printList() {
        $currentNode = $this->head;

        while ($currentNode != null) {
            echo $currentNode->data . " ";
            $currentNode = $currentNode->next;

            if ($currentNode == $this->head) {
                break;
            }
        }

        echo "<br>";
    }
    public function HapusD() {
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
    public function HapusB() { 
        if ($this->head == null) {
            return;
        } else if ($this->head == $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $currentNode = $this->head;
            $prevNode = null;

            while ($currentNode->next != $this->head) {
                $prevNode = $currentNode;
                $currentNode = $currentNode->next;
            }

            $prevNode->next = $this->head;
            $this->tail = $prevNode;
        }
    }

    function clear() {// membersihkan data node
        $this->head = null;
        $this->tail = null;
    }
}

$CL = new SLLCH ();
$CL->insertD(11);
$CL->insertD(22);
$CL->insertD(33);
$CL->insertB(44);

echo "Isi linked list:";
$CL->printList();

echo "<hr><br>Hapus node pertama<br>";
$CL->HapusD();
echo "Isi linked setelah dihapus: ";
$CL->printList();

echo "<hr><br>Hapus node terakhir<br>";
$CL->HapusB();
echo "Isi linked setelah dihapus: ";
$CL->printList();

echo "<hr><br>Hapus semua node<br>";
$CL->clear();
echo "Linked List setelah dihapus ";
echo "<br>Isi  linked list setelah dihapus: List kosong<br>" ;
$CL->printList();
?>