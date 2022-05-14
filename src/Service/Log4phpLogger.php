<?php
/**
 * Created by PhpStorm.
 * User: xuxz
 * Date: 2022/5/14
 * Time: 15:01
 */

namespace App\Service;


class Log4phpLogger implements LoggerInterface
{
    private $logger;
    public function __construct()
    {
        $this->logger = \Logger::getLogger("Log");
    }
    public function info($message = '')
    {
        $this->logger->info($message);
    }
    public function debug($message = '')
    {
        $this->logger->debug($message);
    }
    public function error($message = '')
    {
        $this->logger->error($message);
    }
}