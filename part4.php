<?php
function mypr($str){
    echo "<pre>";
    print_r($str);
    echo "</pre>";
    echo "<br>";
}

// function abs($num)
// {
//     if($num < 0){
//         return - $num;
//     }
//     return $num;
// }

function hello($name, $greeting = 'Hello!'){
    echo $greeting, $name, "<br>";
}

hello('Bob', 'Good morning!');
hello('Tom');


function array_output(array $var)
{
    if(is_array($var)) {
        foreach ($var as $v){
            echo $v, "<br>";
        }
    }
}
$array = array(1,2,3,4,5);
// array_output($array);
// array_output(1);

$array = array(1, 1.5, "2", true);
$new_array = array_map('strval', $array);
mypr($new_array);


function func_caller($name, $str)
{
    if (function_exists($name)){
        $name($str);
    }

}
function foo($str)
{
    echo $str.' called'.'<br>';
}
$s = "test";
func_caller('foo', $s);

// p111
// function add($v1, $v2)
// {
    // return $v1 + $v2;
// }

// class Math
// {
//     public function sub($v1, $v2)
//     {
//         return $v1 - $v2;
//     }
//     public static function add($v1, $v2)
//     {
//         return $v1 + $v2 + 10;
//     }
// }

// call_user_func('add', 1,2);
// call_user_func(function ($v1, $v2){ return $v1+$v2;}, 2,3);
// call_user_func(array('Math', 'add'),3,4);
// call_user_func('Math::add', 4,5);
// //インスタンス変数とメソッド名を指定する場合
// $math = new Math();
// call_user_func(array($math, 'sub'), 5,6);
// call_user_func_array('add', array(6,7));
// call_user_func_array(array($math, 'sub'), array(2,1));

// 参照に寄る引数と返り値
// うまく動かん ????
    // function add_one(&$value)
    // {
    //     $value += 1;
    // }
    // $a = 10;
    // add_one($a);

    // mypr($a);

    // // $b =& add_one($a);
    // $b += 1;
    // mypr($a);
    // mypr($b);

// うまく動かん ????
// $myadd = function()
// {
//     return 8;//$vv1 + $vv2;
// }
// var_dump($myadd);

$array = array(
    '"ダブルクォート"',
    '<tag>',
    '\'シングルクォート\'',
);
$escaped = array_map(function($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($escaped);

$my_pow = function ($times = 2)
{
    return function ($v) use (&$times)  // ????　&をとっても動く。参照にする意味は？
    {
        return pow($v, $times);
    };
};

$cube = $my_pow(3);
mypr($cube(2));
mypr($cube(4));

$cube2 = $my_pow(4);
mypr($cube2(2));

// var_dump(get_defined_functions());
