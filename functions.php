<?php

// 定数について
// 一度定義すると値の変更ができない
// 接続の処理やあまり変更することがない重要な処理は定数で定義するとよいかも
// プログラミングの世界では、定数は大文字アルファベットで書くのが慣習
define('DSN','mysql:host=localhost;dbname=nowall;charset=utf8');
define('USER','testuser');
define('PASSWORD','9999');

function connectDb()
{
	// $dsn = 'mysql:host=localhost;dbname=nowall;charset=utf8';
	// $user = 'testuser';
	// $password = '9999';
	// 1.ここの位置などに$user = 'otake'などと追記すると$userの値が上書きされてDB接続がうまくいかなくなるので変更できないように定数を使う

	try
	{
		// return new PDO($dsn,$user,$password); 
		return new PDO(DSN,USER,PASSWORD); 
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
		exit;
	}
}
