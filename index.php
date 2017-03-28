<?php

// データベースへの接続
// PDOクラスを利用する
// try ~ catch命令

try
{
	$dbh = new PDO('mysql:host=localhost;dbname=nowall;charset=utf8','testuser','9999');
	echo '成功しました!';
}
catch (PDOException $e)
{
	echo $e->getMessage();
	exit;
}

/* try ~ catch 命令 *
 * try
 * {
 *   // 例外発生する可能性がある処理
 *   }
 *   catch(発生するかもしれない例外の種類 例外を受け取る変数名)
 *   {
 *     // 例外発生時の処理
 *     }
 *
 */

/* PDOクラス *
 *
 * new PDO($dsn, $user, $password);
 * $dsn     : データベース接続用の文字列 mysql:host=localhost;dbname=nowall;charset=utf8;
 * $user    : 接続するときのユーザー名
 * $password: 接続する際のパスワード
 */
