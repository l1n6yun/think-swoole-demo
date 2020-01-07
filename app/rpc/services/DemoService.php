<?php

namespace app\rpc\services;


use app\rpc\interfaces\DemoInterface;

class DemoService implements DemoInterface
{
    public function sqrt($int)
    {
        return sqrt($int);
    }
}