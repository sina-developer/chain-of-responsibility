<?php

require("./autoload.php");

use LogHandler\Loggers\ConsoleLogger;
use LogHandler\Loggers\EmailLogger;
use LogHandler\Loggers\FileLogger;
use LogHandler\Masks;

$levels = Masks::Levels();

$logger = (new ConsoleLogger($levels->All))
                    ->SetNext(new EmailLogger($levels->FunctionalMessage | $levels->FunctionalError))
                    ->SetNext(new FileLogger($levels->Warning | $levels->Error));
                    
        
$logger->Message("Hello World!" , $levels->Debug);
$logger->Message("Bye World!" , $levels->Warning);
$logger->Message("LastMessage!" , $levels->FunctionalMessage);