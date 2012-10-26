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
        return 'PHP-Version: ' . phpversion() . '<br />Extensions loaded: ' . implode(', ', $extArray);
    }


}
