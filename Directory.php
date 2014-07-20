<?php
// 名前空間サンプル
namespace Project\Module;

class Directory
{
    public $name = "PM_Directory";
}
function file () {}
const E_ALL = 0x01;
$var = 0x01;

$dir = new Directory();
// $dir = new \Project\module\Directory();
echo $dir->name;
