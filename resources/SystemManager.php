<?php

class SystemManager
{

    /**
    *
    */
    public function __construct()
    {

    }


    /**
    *
    */
    public function getInfo() {
        $extArray = get_loaded_extensions();
	$str = 'PHP-Version: ' . phpversion() . '<br />Extensions loaded: ' . implode(', ', $extArray);
	$str .= '<br />Mehr Infos hab ich nicht';
	return $str;
    }


}
