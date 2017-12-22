<?php

namespace Alsi\Util;

class Logger
{
    const LEVEL_INFO = 0;
    const LEVEL_NOTICE = 1;
    const LEVEL_WARNING = 2;
    const LEVEL_ERROR = 3;
    
    private $praefix;
    
    public function __construct($praefix = 'LOG')
    {
        $this->praefix = $praefix;
    }
    
    public function log($message, $level = self::LEVEL_INFO)
    {
        echo "{$this->praefix}[{$level}] $message" . PHP_EOL;
    }
}