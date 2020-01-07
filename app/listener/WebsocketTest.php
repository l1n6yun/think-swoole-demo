<?php
declare (strict_types = 1);

namespace app\listener;

use think\Container;
use think\swoole\Websocket;

class WebsocketTest
{
    private $websocket;

    /**
     * WebsocketTest constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->websocket = $container->make(Websocket::class);
    }

    /**
     * 事件监听处理
     * @param $event
     */
    public function handle($event)
    {
        $this->websocket->emit("chatMessage", ['msg' => "You say '".$event['msg']."'."]);
    }
}
