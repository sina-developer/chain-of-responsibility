<?php

namespace LogHandler;


class Masks{
    private static $levels = [
        "None" => 0,
        "Info" => 1,
        "Debug" => 2,
        "Warning" => 4,
        "Error" => 8,
        "FunctionalMessage" => 16,
        "FunctionalError" => 32,
        "All" => 63,
    ];

    public static function Levels(){
        return (object) self::$levels;
    }
}