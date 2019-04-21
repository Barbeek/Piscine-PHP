<?php
    abstract class Fighter {

        public  $type;
        abstract protected function fight($target);
        
        public function __construct( $type )
        {
            $this->type = $type;
            return ;
        }
    }
?>