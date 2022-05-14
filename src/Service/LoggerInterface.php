<?php
/**
 * Created by PhpStorm.
 * User: xuxz
 * Date: 2022/5/14
 * Time: 14:56
 */

namespace App\Service;


Interface LoggerInterface
{
    public function info($message = '');
    public function debug($message = '');
    public function error($message = '');
}