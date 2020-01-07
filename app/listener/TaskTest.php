<?php
declare (strict_types = 1);

namespace app\listener;

class TaskTest
{
    /**
     * 事件监听处理
     * @param $event
     */
    public function handle($event)
    {
        // 睡一会
        sleep(rand(1, 2));
        var_dump($event->data);
    }
}
