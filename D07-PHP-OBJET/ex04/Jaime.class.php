<?php
class Jaime extends Lannister{
    public function with($person){
        if (get_parent_class($person) !== "Lannister")
            return "Let's do this";
        if (get_class($person) === "Cersei")
            return "With pleasure, but only in a tower in Winterfell, then.";
        else
            return "Not even if I'm drunk!";
    }
}
?>