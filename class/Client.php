<?php

class Client {

    const RESERVATION_NAME_MSG = "Name or reservation?";
    const PEOPLE_AMOUNT_MSG = "How many people?(Please, number greater or equal than 1";

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function reserve(Pub $pub) {
        $reserveName = $this->getReservationName();
        $peopleNumber = $this->getPeopleNumber();
        $pub->checkReservation($reserveName, $peopleNumber);
    }

    private function getReservationName(): string {
        $name = readline(self::RESERVATION_NAME_MSG);
        if(is_null($name) || $name == "") return $this->name;
        return $name; 
    }

    private function getPeopleNumber(): int {
        $number = 0;
        do {
            $number = intval(readline(self::PEOPLE_AMOUNT_MSG));
        }while($number < 1);
        return $number;
    }
}

