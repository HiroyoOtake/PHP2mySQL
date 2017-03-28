<?php
/*
DBに接続するときは、決まりきったある程度の長さのコードを書く必要がある
ある程度の規模のアプリケーションになってくると、色々なファイルにこの処理を書くことになる
そうすると
・面倒
・パスワードなどが変更になった場合には、すべてのファイルを修正しなければならなくなる
ので、下記のようなよく使われる処理は関数にまとめるとそれらを回避できる
*/

function connectDb()
{
	$dsn = 'mysql:host=localhost;dbname=nowall;charset=utf8';
	$user = 'testuser';
	$password = '9999';

	try
	{
		return new PDO($dsn,$user,$password); //関数が呼び出されるとnew PDO($dsn,$user,$password)の値が返ってくるようにreturnにする
	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
		exit;
	}
}
