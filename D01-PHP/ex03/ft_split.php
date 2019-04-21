<?php 
    function ft_split($str)
    {
        $r = explode(" ", $str);
        sort($r);
        $ret = array();
        foreach ($r as $key)
        {
            if (!empty($key) || $key == "0")
                 $ret[] = $key; 
        }
        unset($rr);
        return ($ret);
    }
?>