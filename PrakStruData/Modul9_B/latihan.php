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
class DoublyLinkedList {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty(): bool {
        return $this->head === null;
    }

    public function insertAtHead($data): void {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    public function insertAtTail($data): void {
        $newNode = new Node($data);

        if ($this->isEmpty()) {
            $this->head = $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
        }
    }

    public function deleteFromHead(): void {
        if ($this->isEmpty()) {
            echo "Linked list is empty.\n";
            return;
        }

        $deletedNode = $this->head;

        if ($this->head === $this->tail) { // Handle single-node case
            $this->head = $this->tail = null;
        } else {
            $this->head = $this->head->next;
            $this->head->prev = null;
        }

        unset($deletedNode);
    }

    public function deleteFromTail(): void {
        if ($this->isEmpty()) {
            echo "Linked list is empty.\n";
            return;
        }

        $deletedNode = $this->tail;

        if ($this->head === $this->tail) { // Handle single-node case
            $this->head = $this->tail = null;
        } else {
            $this->tail = $this->tail->prev;
            $this->tail->next = null;
        }

        unset($deletedNode);
    }

    public function printList(): void {
        if ($this->isEmpty()) {
            echo "Linked list is empty.\n";
            return;
        }

        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }

    public function clear(): void {
        if ($this->isEmpty()) {
            echo "Linked list is empty.\n";
            return;
        }

        $current = $this->head;
        while ($current !== null) {
            $temp = $current;
            $current = $current->next;
            unset($temp);
        }

        $this->head = null;
        $this->tail = null;
        echo "Linked list cleared successfully.\n";
    }
}

// Example usage
$linkedList = new DoublyLinkedList();
$linkedList->insertAtHead(10);
$linkedList->insertAtTail(20);
$linkedList->insertAtHead(5);
$linkedList->printList(); // Output: 5 10 20

$linkedList->deleteFromHead();
$linkedList->printList(); // Output: 10 20

$linkedList->clear();
$linkedList->printList(); // Output: Linked list is empty.
