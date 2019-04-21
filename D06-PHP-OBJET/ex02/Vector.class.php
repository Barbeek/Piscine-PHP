<?php

require_once('Vertex.class.php');

class Vector{
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;
    public static $verbose = FALSE;

    public static function doc(){
        return (file_get_contents('Vector.doc.txt'));
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

    public function __construct(array $kwargs){
        if (array_key_exists('x', $kwargs) && array_key_exists('y', $kwargs) && array_key_exists('z', $kwargs))
        {
            $this->_x = $kwargs['x'];
            $this->_y = $kwargs['y'];
            $this->_z = $kwargs['z'];
        }
        else{
            $dest = $kwargs['dest'];
            if (array_key_exists('orig', $kwargs))
                $orig = $kwargs['orig'];
            else
                $orig = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0));
            $this->_x = $dest->getX() - $orig->getX();
            $this->_y = $dest->getY() - $orig->getY();
            $this->_z = $dest->getZ() - $orig->getZ();
        }
        $this->_w = 0.0;
        if (self::$verbose === TRUE){
            print($this->__toString());
            print(' constructed' . PHP_EOL);
        }   
    }

    public function __destruct(){
        if (self::$verbose === TRUE)
            print($this->__toString() . ' destructed' . PHP_EOL);
    }

    public function __toString(){
        return sprintf("Vector( x:%3.2f, y:%3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
    }

    public function magnitude(){
        return(sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2)));
    }

    public function normalize(){
        $mag = $this->magnitude(); 
        $n_x = $this->_x / $mag;
        $n_y = $this->_y / $mag;
        $n_z = $this->_z / $mag;
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function add($rhs){
        $n_x = $this->_x + $rhs->getX();
        $n_y = $this->_y + $rhs->getY();
        $n_z = $this->_z + $rhs->getZ();
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function sub($rhs){
        $n_x = $this->_x - $rhs->getX();
        $n_y = $this->_y - $rhs->getY();
        $n_z = $this->_z - $rhs->getZ();
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function opposite(){
        $n_x = -$this->_x;
        $n_y = -$this->_y;
        $n_z = -$this->_z;
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function scalarProduct($k){
        $n_x = $this->_x * $k;
        $n_y = $this->_y * $k;
        $n_z = $this->_z * $k;
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function dotProduct($rhs){
        $n_x = $this->_x * $rhs->getX();
        $n_y = $this->_y * $rhs->getY();
        $n_z = $this->_z * $rhs->getZ();
        return($n_x + $n_y + $n_z);
    }

    public function crossProduct($rhs){
        $n_x = ($this->_y * $rhs->getZ()) - ($this->_z * $rhs->getY());
        $n_y = ($this->_z * $rhs->getX()) - ($this->_x * $rhs->getZ());
        $n_z = ($this->_x * $rhs->getY()) - ($this->_y * $rhs->getX());
        return(new Vector (array('dest' => new Vertex (array( 'x' => $n_x, 'y' => $n_y, 'z' => $n_z)))));
    }

    public function cos($rhs){
        $mag = $this->magnitude();
        $m_x = $this->_x / $mag;
        $m_y = $this->_y / $mag;
        $m_z = $this->_z / $mag;

        $rhs_mag = $rhs->magnitude();
        $rhs_x = $rhs->getX() / $rhs_mag;
        $rhs_y = $rhs->getY() / $rhs_mag;
        $rhs_z = $rhs->getZ() / $rhs_mag;

        $dot_x = $m_x * $rhs_x;
        $dot_y = $m_y * $rhs_y;
        $dot_z = $m_z * $rhs_z;
        $dotprod = $dot_x + $dot_y + $dot_z;
        return($dotprod);
    }
}
?>