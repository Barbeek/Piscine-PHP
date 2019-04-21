<?php
class NightsWatch{
    public function recruit($person){
        if ($person instanceof IFighter){
            $this->array[] = $person;
        }
    }
    public function fight(){
        foreach ($this->array as $key => $value){
            $value->fight();
        }
    }
}
?>