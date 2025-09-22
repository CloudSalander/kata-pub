<?php

class Client {

    const RESERVATION_NAME_MSG = "Name or reservation?";
    const PEOPLE_AMOUNT_MSG = "How many people?";

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
        return intval(readline(self::PEOPLE_AMOUNT_MSG));
    }


}

