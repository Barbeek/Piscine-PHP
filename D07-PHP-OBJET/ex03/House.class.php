<?php
abstract class House{
    abstract public function getHouseName();
    abstract public function getHouseSeat();
    abstract public function getHouseMotto();
    public function introduce(){
        print('House ');
        print($this->getHouseName());
        print(' of ');
        print($this->getHouseSeat());
        print(' : "');
        print($this->getHouseMotto());
        print("\"" . PHP_EOL);
    }
}
?>