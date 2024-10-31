<?php
class Node {// menampung isi dalam node
    public $data;// menakukan publikasi dari variabel data
    public $next;// melakukan publikasi variabel nexr 

    function __construct($data) {// pemanggilan fungsi secara otomatis
        $this->data = $data;
        $this->next = NULL;
    }
}

class SLLCH {
    private $first;
    private $last;

    function __construct() {// pemanggilan data secara otomatis
        $this->first = NULL;
        $this->last = NULL;
    }

    function insertD($data) {// melakukan inisialisasi data dari insert d pada variabel data
        $newNode = new Node($data);

        if ($this->first == NULL) {// melakukan proses perulangan 
            $this->first = $newNode;
            $this->last = $newNode;
        } else {
            $newNode->next = $this->first;
            $this->first = $newNode;
        }
    }

    function insertB($data) {// melakukan inisialisasi data dari insert b pada variabel data
        $newNode = new Node($data);

        if ($this->first == NULL) {// melakukan perulangan 
            $this->first = $newNode;
            $this->last = $newNode;
        } else {
            $this->last->next = $newNode;
            $this->last = $newNode;
        }
    }

    function HapusD() {// melakukan perulangan untuk menghapus data d
        if ($this->first != NULL) {
            $this->first = $this->first->next;

            if ($this->first == NULL) {
                $this->last = NULL;
            }
        }
    }

    function HapusB() {// melakukan perulangan untuk menghapus data b
        if ($this->last != NULL) {
            if ($this->first == $this->last) {
                $this->first = NULL;
                $this->last = NULL;
            } else {
                $temp = $this->first;
                while ($temp->next != $this->last) {// melakukan perulangan while
                    $temp = $temp->next;
                }
                $temp->next = NULL;
                $this->last = $temp;
            }
        }
    }

    function clear() {// membersihkan data node
        $this->first = NULL;
        $this->last = NULL;
    }

    function printList() {// melakukan print list secara langsung
        $temp = $this->first;
        while ($temp != NULL) {// melakukan perulangan while
            echo $temp->data . " ";
            $temp = $temp->next;
        }
        echo "<br>";
    }
}
$CL = new SLLCH();
$CL ->insertD(11);// memasukan nilai 11
$CL ->insertD(22);// memasukan nilai 22
$CL ->insertD(33);// memasukan nilai 33
$CL ->insertB(44);// memasukan nilai 44
echo "Isi linked list:";
$CL ->printList();// melakukan print data

echo "<hr><br> Hapus node pertama<br>";
$CL->HapusD();// menghapus data d
echo "Isi linked setelah dihapus:";
$CL ->printList();// melakukan print data secara langsung
echo "<hr><br> Hapus node terakhir<br>";
$CL->HapusB();// menghapus data b atau data terkhir
echo "Isi linked setelah dihapus:";
$CL ->printList();// melakukan print data secara langsung
echo "<hr><br> Hapus semua node<br>";
$CL->clear();// menghapus semua data yang ada atau telah diinputkan
echo "Isi linked setelah dihapus:";
echo "List kosong";
$CL ->printList();// melakukan print data secara langsung
?>