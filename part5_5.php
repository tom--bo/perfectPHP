<?php
// 例外
class ZeroDivisionException extends Exception
{

}

function div ($v1, $v2)
{
    if($v2 === 0){
        throw new ZeroDivisionException("arg #2 is zero.");
    }
    return $v1/$v2;
}

try{
    echo div(1,2)."<br>";
    echo div(1,0)."<br>";
    echo div(2,1)."<br>";
}catch(ZeroDivisionException $e) {
    echo 'Zero Division Exception!<br>';
    echo $e->getMessage().'<br>';
}catch(Exception $e){
    echo 'Exception!'.'<br>';
    echo $e->getMessage().'<br>';
}
