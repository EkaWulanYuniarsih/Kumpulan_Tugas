<?php
session_start();

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class CircularLinkedList {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function addFront($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        } else {
            $newNode->next = $this->head;
            $this->head = $newNode;
            $this->tail->next = $this->head;
        }
    }

    public function addBack($data) {
        $newNode = new Node($data);
        if ($this->tail === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
            $this->tail->next = $this->head;
        }
    }

    public function removeFront() {
        if ($this->head === null) {
            return;
        } elseif ($this->head === $this->tail) {
            $this->head = null;
            $this->tail = null;
        } else {
            $this->head = $this->head->next;
            $this->tail->next = $this->head;
        }
    }

    public function printList() {
        if ($this->head === null) {
            echo "List is empty";
            return;
        }

        $current = $this->head;
        do {
            echo $current->data . " ";
            $current = $current->next;
        } while ($current !== $this->head);
    }

    public function serialize() {
        $nodes = [];
        if ($this->head !== null) {
            $current = $this->head;
            do {
                $nodes[] = $current->data;
                $current = $current->next;
            } while ($current !== $this->head);
        }
        return serialize($nodes);
    }

    public function unserialize($data) {
        $nodes = unserialize($data);
        if ($nodes) {
            foreach ($nodes as $nodeData) {
                $this->addBack($nodeData);
            }
        }
    }
}

if (!isset($_SESSION['list'])) {
    $_SESSION['list'] = (new CircularLinkedList())->serialize();
}

$list = new CircularLinkedList();
$list->unserialize($_SESSION['list']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];
    $data = isset($_POST['data']) ? $_POST['data'] : null;

    switch ($action) {
        case 'addFront':
            $list->addFront($data);
            break;
        case 'addBack':
            $list->addBack($data);
            break;
        case 'removeFront':
            $list->removeFront();
            break;
    }
    $_SESSION['list'] = $list->serialize();
}

if (isset($_GET['action']) && $_GET['action'] === 'print') {
    $_SESSION['list'] = $list->serialize();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Single Link List Circular dengan Head dan Tail</title>
</head>
<body>
    <h1>Single Link List Circular dengan Head dan Tail</h1>
    <form method="POST" action="">
        <label for="data">Data:</label>
        <input type="text" name="data" id="data">
        <br>
        <button type="submit" name="action" value="addFront">TAMBAH DATA DI DEPAN</button><br><br>
        <button type="submit" name="action" value="addBack">TAMBAH DATA DI BELAKANG</button><br><br>
        <button type="submit" name="action" value="removeFront">HAPUS DATA DI DEPAN</button><br><br>
        <button type="button" onclick="location.href='?action=print'">CETAK DATA</button><br><br>
    </form>
    <h2>Data:</h2>
    <p>
        <?php
        if (isset($_GET['action']) && $_GET['action'] === 'print') {
            $list->printList();
        
        }
        ?>
    </p>
</body>
</html>
