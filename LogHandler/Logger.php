<?php 

namespace LogHandler;

abstract class Logger{
    protected $logMask ;
    
    protected $next;

    public function __construct($mask){
        $this->logMask = $mask;
    }

    public function SetNext(Logger $nextLogger) : Logger {
        $lastLogger = $this;
        
        while ($lastLogger->next != null) {
            $lastLogger = $lastLogger->next;
        }

        $lastLogger->next = $nextLogger;
        return $this;
    }

    public function Message($msg , $loglevel){
        if(($loglevel & $this->logMask) != 0){
            $this->Writemessage($msg);
        }
        if($this->next != null){
            $this->next->Message($msg , $loglevel);
        }
    }

    abstract protected function Writemessage($string); 
}