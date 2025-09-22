
<?php

class Pub {

    private array $tables;
    
    public function __construct($tables) {
        $this->tables = $tables;
    }

    public function checkReservation(string $name, int $qty): bool {
        $tableId = $this->checkTables($qty);
        var_dump($tableId);
        if($tableId > 0) {
            //$this->reserveTable($tableId);
        }
        return false;
    } 

    private function checkTables(int $qty): int {
        foreach($this->tables as $table) {
            //Why I check first if its busy?
            if(!$table->getIsBusy() && $table->getCapacity() >= $qty) {
                $table->switchIsBusy();
                return $table->getId();
            }
        }
        return -1;
    }
}