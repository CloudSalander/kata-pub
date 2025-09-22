<?php

class Pub {

    private array $tables;
    
    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function checkReservation(string $name, int $qty): bool {
        var_dump($name);
        var_dump($qty);
        return false;
    } 
}