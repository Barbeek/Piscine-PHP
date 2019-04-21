<?php

require_once('Color.class.php');

class Vertex{

    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;
    public static $verbose = FALSE;

    public static function doc(){
        return (file_get_contents('Vertex.doc.txt'));
    }

    public function get($attr){
        return($this->attr = $attr);
    }

    public function getX(){
        return($this->_x);
    }

    public function getY(){
        return($this->_y);
    }

    public function getZ(){
        return($this->_z);
    }

    public function getW(){
        return($this->_w);
    }

    public function getColor(){
        return($this->_color);
    }

    public function setX($value){
        return($this->_x = $value);
    }

    public function setY($value){
        return($this->y = $value);
    }

    public function setZ($value){
        return($this->z = $value);
    }

    public function setW($value){
        return($this->w = $value);
    }

    public function setColor($color_values){
        return($this->_color = $color_values);
    }

    public function __construct(array $kwargs){
        $this->_w = 1.0;
        $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        if ($kwargs['x'] !== NULL && $kwargs['y'] !== NULL && $kwargs['z'] !== NULL){
            $this->_x = $kwargs['x'];
            $this->_y = $kwargs['y'];
            $this->_z = $kwargs['z'];
            if (array_key_exists('w', $kwargs))
                $this->_w = $kwargs['w'];
            if (array_key_exists('color', $kwargs))
                $this->_color = $kwargs['color'];
        }
        if (self::$verbose === TRUE)
        {
            print($this->__toString()); 
            print(' constructed' . PHP_EOL);
        }
    }

    public function __destruct(){
        if (self::$verbose === TRUE)
            print($this->__toString() . ' destructed' . PHP_EOL);
    }

    public function __toString(){
        if (self::$verbose === TRUE)
            return('Vertex( x: ' .sprintf("%.2f", $this->_x).', y: ' .sprintf("%.2f", $this->_y).', z: ' .sprintf("%.2f", $this->_z).', w: ' .sprintf("%.2f", $this->_w).', '.$this->_color.' ) ');
        else
            return('Vertex( x: ' .sprintf("%.2f", $this->_x).', y: ' .sprintf("%.2f", $this->_y).', z: ' .sprintf("%.2f", $this->_z).', w: ' .sprintf("%.2f", $this->_w).' ) ');
    }
}
?>