<?php

class Employee
{
    const PARTTIME = 0x01;
    const REGULAR = 0x02;
    const CONTRACT = 0x04;
    public $name;
    private $type;
    private $state = '働いている';
    public static $company = '技評技術社';

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        self::$company = $value;
    }

    public function work()
    {
        echo '書類を整理しています。'.'<br>';
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
}

echo Employee::$company;
Employee::setCompany('御社弊社');
echo Employee::getCompany();
echo "<br>";
$yamada = new Employee('山田a', Employee::CONTRACT);
// $yamada->name = '山田';
echo $yamada->getState().$yamada->name.'さん';
$yamada->setState('働いていない');
echo $yamada->getState().$yamada->name.'さん';

echo "<br>====<br>";

$arr = array(
    'foo' => 2,
    'bar' => 3,
);

$array_obj = (object)$arr;
echo $array_obj->foo.'<br>';
