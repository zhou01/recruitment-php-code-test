<?php

namespace App\Service;

class AppLogger
{
    const TYPE_LOG4PHP = 'log4php';
    const TYPE_TopThink = 'topThink';

    private $logger;

    public function __construct($type = self::TYPE_LOG4PHP)
    {
        switch ($type){
            case self::TYPE_TopThink:
                $this->logger = new TopThinkLogger();
                break;
            default:
                $this->logger = new Log4phpLogger();
        }
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