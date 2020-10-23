<?php

namespace LogHandler\Loggers;

use LogHandler\Logger;

class EmailLogger extends Logger{
    public function __construct($mask){
        parent::__construct($mask);
    }   

    protected function Writemessage($string){
        echo "Sending via email : " . $string . "\n";
    }
}