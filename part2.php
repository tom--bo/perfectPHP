<?php

// 可変変数
	echo "可変変数: ";
	$var = 10;
	$var_name = 'var';
	echo $$var_name;

	echo '<br><br>';

//グローバルスコープ
	echo "グローバルスコープ: ";
	$foo = 1;
	function some_function()
	{
		global $foo;
		echo $foo;
	}
	some_function();

	echo '<br><br>';

//スーパーグローバル変数
	// var_dump($GLOBALS);
	// var_dump($_SERVER);
	// var_dump($_GET);
	// var_dump($_POST);
	// var_dump($_FILES);
	// var_dump($_COOKIE);
	// var_dump($_REQUEST);
	// var_dump($_SESSION);
	// var_dump($_ENV);

// 定数定義
	echo "定数定義<br>";
// define()関数
	echo "define()関数";
	define('BOOK', 'Perfect PHP');
	echo BOOK;

	echo '<br>';

// constによる定数定義
	echo "constによる定義";
	const BOOK2 = 'Perfect PHP2';
	echo BOOK2;

	echo '<br>';

// constant()関数  定義したのに更に変数に入れる意味？ー＞動的に変数定義の変数を作る？
	echo "constant()関数";
	define('BOOK3', 'Perfect PHP3');
	$value = 'BOOK3';
	echo constant($value);

	echo '<br><br>';

// 定義済み定数
	echo "定義済み定数"."<br>";
	echo PHP_VERSION;
	echo '<br>';
	echo PHP_OS;
	echo '<br>';
	echo PHP_EOL;
	echo '<br>';
	// echo STDIN;
	// echo '<br>';
	echo E_WARNING;

	echo '<br><br>';

// マジック定数
	echo "マジック定数<br>";
	echo __FILE__.'<br>';
	echo __DIR__.'<br>';
	echo __LINE__.'<br>';
	// echo __FUNCTION__.'<br>';
	// echo __CLASS__.'<br>';
	// echo __METHOD__.'<br>';
	// echo __NAMESPACE__.'<br>';

	echo '<br><br>';







?>