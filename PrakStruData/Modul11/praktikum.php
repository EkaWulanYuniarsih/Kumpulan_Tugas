<?php

// Kelas TreeNode untuk mendefinisikan node pada tree
class TreeNode {
    public $data;
    public $left;
    public $right;

    // Konstruktor untuk menginisialisasi node dengan data
    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

// Kelas BinaryTree untuk mendefinisikan tree biner
class BinaryTree {
    public $root;

    // Konstruktor untuk menginisialisasi tree dengan root null
    public function __construct() {
        $this->root = null;
    }

    // Fungsi untuk mencetak daun (leaf nodes) dari tree
    public function daun($node) {
        if ($node == null) {
            return;
        }
        if ($node->left == null && $node->right == null) {
            echo $node->data . " ";
        }
        $this->daun($node->left);
        $this->daun($node->right);
    }

    // Fungsi untuk mencari node dengan data tertentu
    private function cariNode($node, $data) {
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

    // Fungsi untuk mengecek apakah data tertentu ada di tree
    public function cek($data) {
        if ($this->cariNode($this->root, $data)) {
            return "data $data ditemukan";
        } else {
            return "data $data tidak ditemukan";
        }
    }

    // Fungsi untuk menghitung jumlah node dalam tree
    public function hitung($node) {
        if ($node == null) {
            return 0;
        }
        return 1 + $this->hitung($node->left) + $this->hitung($node->right);
    }

    // Fungsi untuk traversal preorder
    public function preorder($node) {
        if ($node != null) {
            echo $node->data . " ";
            $this->preorder($node->left);
            $this->preorder($node->right);
        }
    }

    // Fungsi untuk traversal inorder
    public function inorder($node) {
        if ($node != null) {
            $this->inorder($node->left);
            echo $node->data . " ";
            $this->inorder($node->right);
        }
    }

    // Fungsi untuk traversal postorder
    public function postorder($node) {
        if ($node != null) {
            $this->postorder($node->left);
            $this->postorder($node->right);
            echo $node->data . " ";
        }
    }

    // Fungsi untuk menghitung kedalaman (depth) tree
    public function kedalaman($node) {
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

echo "Preorder: ";
$tree->preorder($tree->root);
echo "<br>";

echo "Inorder: ";
$tree->inorder($tree->root);
echo "<br>";

echo "Postorder: ";
$tree->postorder($tree->root);
echo "<br>";

$data = 51;
echo $tree->cek($data) . "<br>"; // Mengecek apakah data 51 ada di tree

$data = 33;
echo $tree->cek($data) . "<br>"; // Mengecek apakah data 33 ada di tree

echo "Jumlah Node : " . $tree->hitung($tree->root) . "<br>"; // Menghitung jumlah node di tree

echo "Kedalaman level: " . $tree->kedalaman($tree->root) . "<br>"; // Menghitung kedalaman tree

echo "Daun : ";
$tree->daun($tree->root); // Mencetak daun dari tree
echo "<br>";

?>
