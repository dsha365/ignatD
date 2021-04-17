<?php

namespace ignateva;

use core\LogAbstract;
use core\LogInterface;
include 'core\LogAbstract.php';
include 'core\LogInterface.php';

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $mass) {
            echo $mass;
        }
    }

    public static function log($str)
    {
        self::Instance()->log[] = $str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}