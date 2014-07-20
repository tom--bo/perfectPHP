<?php
// 名前空間サンプル
// program.php
namespace Other;
require_once 'Cake.php';
require_once 'Directory.php';

$c = new \Food\Sweets\Cake();
$dir1 = new \Project\Module\Directory();
$dir2 = new \Directory();

var_dump($dir2);

