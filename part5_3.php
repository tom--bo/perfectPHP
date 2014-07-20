<?php
// 遅延静的束縛

class Foo
{
    public function helloGateway()
    {
        // self::hello();
        static::hello();
    }

    public static function hello()
    {
        echo __CLASS__, ' hello!!'.'<br>';
    }
}

class Bar extends Foo
{
    public static function hello()
    {
        echo __CLASS__, ' hello!!'.'<br>';
    }
}

$bar = new Bar();
$bar->helloGateway();
