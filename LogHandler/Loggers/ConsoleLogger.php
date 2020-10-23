<?php

namespace LogHandler\Loggers;

use LogHandler\Logger;

class ConsoleLogger extends Logger{
    public function __construct($mask){
        parent::__construct($mask);
    }   

    protected function Writemessage($string){
        echo "Writing to console : " . $string . "\n";
    }
}