<?php
    function ft_is_sort($tab){
        $ret = $tab;
        asort($ret);
        if ($tab === $ret)
            return(TRUE);
        else
        arsort($ret);
        if ($tab === $ret)
            return(TRUE);
        else
            return(FALSE);
    }
?>