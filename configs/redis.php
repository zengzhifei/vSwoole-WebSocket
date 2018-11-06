<?php
// +----------------------------------------------------------------------+
// | VSwoole FrameWork                                                    |
// +----------------------------------------------------------------------+
// | Not Decline To Shoulder a Responsibility                             |
// +----------------------------------------------------------------------+
// | zengzhifei@outlook.com                                               |
// +----------------------------------------------------------------------+

return [
    //缓存连接配置（正式）
    'redis_master' => [
        'host'       => '127.0.0.1',
        'port'       => 6379,
        'password'   => 'Pa$$w0rd!@#.',
        'select'     => 0,
        'timeout'    => 0,
        'expire'     => 0,
        'persistent' => true,
        'prefix'     => 'VSwoole-',
    ],
    //缓存键值
    'redis_key'    => [
        'WebSocket' => [
            'Server_Ip' => 'WebSocket-Server_Ip',
            'Config'    => 'WebSocket-Config',
        ],
    ],
];