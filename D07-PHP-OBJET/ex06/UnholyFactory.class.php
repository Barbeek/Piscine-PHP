<?php
    class UnholyFactory {

        private $_absorbed = array();

        public  function    absorb( $fighter )
        {
            if (is_a($fighter, Fighter)) {
                foreach($this->_absorbed as $absorbed)
                    if ($absorbed == $fighter):
                        print ('(Factory already absorbed a fighter of type ' . $fighter->type . ')' . PHP_EOL);
                        return ;
                    endif;
                $this->_absorbed += array($fighter->type => $fighter);
                print ('(Factory absorb a fighter of type ' . $fighter->type . ')' . PHP_EOL);
            }
            else
                print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
        }

        public  function    fabricate( $type )
        {
            foreach($this->_absorbed as $abs_type => $fighter)
                if ($abs_type == $type):
                    print ('(Factory fabricates a fighter of type ' . $type . ')' . PHP_EOL);
                    return ($fighter);
                endif;
                
            print ("(Factory hasn't absorbed any fighter of type " . $type . ')' . PHP_EOL);
        }
    }
?>