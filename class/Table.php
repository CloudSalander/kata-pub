<?php 

class Table {

    private int $id;
    private int $capacity;
    private bool $isBusy;

    public function __construct($id,$capacity) {
        $this->id = $id;
        $this->capacity = $capacity;
        $this->isBusy = false;
    }
}

