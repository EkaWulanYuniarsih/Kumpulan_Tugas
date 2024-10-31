<?php

class TreeNode {// Kelas TreeNode untuk mendefinisikan node pada tree
    public $data;// menyimpan data
    public $left;
    public $right;

    public function __construct($data) {// Konstruktor untuk menginisialisasi node dengan data
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

class BinaryTree { // Kelas BinaryTree untuk mendefinisikan tree biner
    public $root;

    public function __construct() {// Konstruktor untuk menginisialisasi tree dengan root null
        $this->root = null;
    }

    public function daun($node) {   // Fungsi untuk mencetak daun (leaf nodes) dari tree
        if ($node == null) {
            return;
        }
        if ($node->left == null && $node->right == null) {
            echo $node->data . " ";
        }
        $this->daun($node->left);
        $this->daun($node->right);
    }

    private function cariNode($node, $data) {// Fungsi untuk mencari node dengan data tertentu
        if ($node == null) {
            return false;
        }
        if ($node->data == $data) {
            return true;
        }
        if ($data < $node->data) {
            return $this->cariNode($node->left, $data);
        } else {
            return $this->cariNode($node->right, $data);
        }
    }
    public function cek($data) {    // Fungsi untuk mengecek apakah data tertentu ada di tree
        if ($this->cariNode($this->root, $data)) {
            return "data $data ditemukan";
        } else {
            return "data $data tidak ditemukan";
        }
    }
    public function hitung($node) {    // Fungsi untuk menghitung jumlah node dalam tree
        if ($node == null) {
            return 0;// mengembalikan data ke nilai 0
        }
        return 1 + $this->hitung($node->left) + $this->hitung($node->right);
    }

    public function preorder($node) {// Fungsi untuk traversal preorder
        if ($node != null) {
            echo $node->data . " ";
            $this->preorder($node->left);
            $this->preorder($node->right);
        }
    }

    public function inorder($node) {// Fungsi untuk traversal inorder
        if ($node != null) {
            $this->inorder($node->left);
            echo $node->data . " ";
            $this->inorder($node->right);
        }
    }

    public function postorder($node) {// Fungsi untuk traversal postorder
        if ($node != null) {
            $this->postorder($node->left);
            $this->postorder($node->right);
            echo $node->data . " ";
        }
    }

    public function kedalaman($node) {// Fungsi untuk menghitung kedalaman (depth) tree
        if ($node == null) {
            return 0;
        } else {
            $leftDepth = $this->kedalaman($node->left);
            $rightDepth = $this->kedalaman($node->right);
            return max($leftDepth, $rightDepth) + 1;
        }
    }
}

// Contoh penggunaan
$tree = new BinaryTree();
$tree->root = new TreeNode(11); // Menambahkan root node
$tree->root->left = new TreeNode(8); // Menambahkan anak kiri dari root
$tree->root->right = new TreeNode(55); // Menambahkan anak kanan dari root
$tree->root->right->left = new TreeNode(33); // Menambahkan anak kiri dari node kanan

echo "Preorder: ";// cetak preorder
$tree->preorder($tree->root);
echo "<br>";

echo "Inorder: ";// cetak inporder
$tree->inorder($tree->root);
echo "<br>";

echo "Postorder: ";// cetak postorder
$tree->postorder($tree->root);
echo "<br>";

$data = 51;
echo $tree->cek($data) . "<br>"; // Mengecek apakah data 51 ada di tree

$data = 33;
echo $tree->cek($data) . "<br>"; // Mengecek apakah data 33 ada di tree

echo "Jumlah Node : " . $tree->hitung($tree->root) . "<br>"; // Menghitung jumlah node di tree

echo "Kedalaman level: " . $tree->kedalaman($tree->root) . "<br>"; // Menghitung kedalaman tree

echo "Daun : ";// cetak daun
$tree->daun($tree->root); // Mencetak daun dari tree
echo "<br>";

?>
