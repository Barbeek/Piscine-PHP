<?php
class Color{
    public $red = 0;
    public $green = 0;
    public $blue = 0;
    private $rgbArray;
    public static $verbose = FALSE;

    
	private function _hex2RGB($hexStr)
	{
        $tmp = intval($hexStr);
        $tmp = dechex($tmp);		
		$len = 6 - strlen($tmp);
		$i = 0;
		while ($i < $len)
		{
            $hex = $hex."0";
			$i++;
		}
        $hex = $hex.$tmp;
		$rgbArray = array();
		if (strlen($hex) == 6) {
            $colorVal = hexdec($hex);
        	$rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        	$rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        	$rgbArray['blue'] = 0xFF & $colorVal;
    	}
    	elseif (strlen($hex) == 3) {
        	$rgbArray['red'] = hexdec(str_repeat(substr($hex, 0, 1), 2));
        	$rgbArray['green'] = hexdec(str_repeat(substr($hex, 1, 1), 2));
        	$rgbArray['blue'] = hexdec(str_repeat(substr($hex, 2, 1), 2));
    	} 
    	else 
    	{
        	return false;
    	}
    	return ($rgbArray);
    }

    public function __construct(array $kwargs){
        if (array_key_exists('rgb', $kwargs))
        {
            $rgbArray = $this->_hex2RGB($kwargs['rgb']);
            $this->red = $rgbArray['red'];
            $this->green = $rgbArray['green'];
            $this->blue = $rgbArray['blue'];
        }
        else if($kwargs['red'] !== NULL && $kwargs['green'] !== NULL && $kwargs['blue'] !== NULL){
            foreach ($kwargs as $key => &$val)
                $val = intval($val);
            $this->red = $kwargs['red'];
            $this->green = $kwargs['green'];
            $this->blue = $kwargs['blue'];
        }
        if (self::$verbose === TRUE)
            print('Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' ) constructed' . PHP_EOL);
    }

    public function __destruct(){
        if (self::$verbose === TRUE)
            print('Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' ) destructed' . PHP_EOL);
    }
    public function __tostring(){
        return('Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' )');
    }
    public function add($color){
        return (new Color( array( 'red' => $color->red + $this->red, 'green' => $color->green + $this->green, 'blue' => $color->blue + $this->blue )));
    }
    public function sub($color){
        return (new Color( array( 'red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $this->blue - $color->blue )));
    }
    public function mult($color){
        return (new Color( array( 'red' => $color * $this->red, 'green' => $color * $this->green, 'blue' => $color * $this->blue )));
    }
    public static function doc(){
        return (file_get_contents('color.doc.txt'));
    }
}
?>