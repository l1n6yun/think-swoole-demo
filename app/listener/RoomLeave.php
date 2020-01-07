<?php
declare (strict_types = 1);

namespace app\listener;

use think\Container;
use think\swoole\Websocket;

class RoomLeave
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
        $this->websocket->leave($event['room']);
        $fd = $this->websocket->getSender();
        $this->websocket->to($event['room'])->emit("chatMessage", ['msg' => "用户({$fd})退出了房间({$event['room']})"]);
    }
}
