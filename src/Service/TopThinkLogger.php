<?php
/**
 * Created by PhpStorm.
 * User: xuxz
 * Date: 2022/5/14
 * Time: 15:50
 */

namespace App\Service;


use think\facade\Log;

class TopThinkLogger implements LoggerInterface
{
    public function __construct()
    {
        Log::init([
            'default'	=>	'file',
            'channels'	=>	[
                'file'	=>	[
                    'type'	=>	'file',
                    'path'	=>	'./logs/',
                ],
            ],
        ]);
    }
    public function info($message = '')
    {
        Log::info($this->formatMessage($message));
    }
    public function debug($message = '')
    {
        Log::debug($this->formatMessage($message));
    }
    public function error($message = '')
    {
        Log::error($this->formatMessage($message));
    }
    public function formatMessage($message){
        return strtoupper($message);
    }
}