<?php
class Node {
    public $data;
    public $next;
    public $prev;

    public function __construct($d) {
        $this->data = $d;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList {
    private $head;
    private $tail;

    public function __construct() {
        $this->head = null;
        $this->tail = null;
    }

    public function isEmpty() {
        return $this->head === null;
    }

    public function insertAtFront($d) {
        $newNode = new Node($d);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $newNode->next = $this->head;
            $this->head->prev = $newNode;
            $this->head = $newNode;
        }
    }

    public function insertAtBack($d) {
        $newNode = new Node($d);
        if ($this->isEmpty()) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $newNode->prev = $this->tail;
            $this->tail = $newNode;
        }
    }

    public function deleteFromFront() {
        if (!$this->isEmpty()) {
            if ($this->head->next === null) {
                $this->head = $this->tail = null;
            } else {
                $nodeToDelete = $this->head;
                $this->head = $this->head->next;
                $this->head->prev = null;
                unset($nodeToDelete);
            }
        } else {
            echo "<br>List is empty";
        }
    }

    public function deleteFromBack() {
        if ($this->isEmpty()) {
            echo "Linked list is empty\n";
            return;
        }

        if ($this->head->next === null) {
            $this->head = $this->tail = null;
        } else {
            $temp = $this->tail;
            $this->tail = $this->tail->prev;
            $this->tail->next = null;
            unset($temp);
        }
    }

    public function printList() {
        if ($this->isEmpty()) {
            echo "Linked list is empty\n";
            return;
        }

        $current = $this->head;
        while ($current !== null) {
            echo $current->data . " ";
            $current = $current->next;
        }
        echo "\n";
    }

    public function clear() {
        if ($this->isEmpty()) {
            echo "Linked list is already empty\n";
            return;
        }

        $current = $this->head;
        while ($current !== null) {
            $next = $current->next;
            unset($current);
            $current = $next;
        }
        $this->head = $this->tail = null;
        echo "Linked list cleared successfully\n";
    }
}


$list = new DoublyLinkedList();
$list->insertAtFront(10);
$list->insertAtFront(20);
$list->insertAtBack(30);
$list->printList();
$list->deleteFromFront();
$list->printList();
$list->deleteFromBack();
$list->printList();
$list->clear();
$list->printList();
?>