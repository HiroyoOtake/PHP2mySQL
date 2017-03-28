<?php

// データベースへの接続
// PDOクラスを利用する
// try ~ catch命令

$dsn = 'mysql:host=localhost;dbname=nowall;charset=utf8';
$user = 'testuser';
$password = '9999';

try
{
	$dbh = new PDO($dsn,$user,$password);
	// echo '成功しました!';
}
catch (PDOException $e)
{
	echo $e->getMessage();
	exit;
}

// query()を使った書き方
// $sql = "select * from members";
// $stmt = $dbh->query($sql); //sqlを実行

// プリペアードッステートメントを使った書き方
// エスケープ処理 プレースホルダ
$sql = "select * from members";
$stmt = $dbh->prepare($sql); //この段階ではsqlを実行していない
$stmt->execute(); //sqlを実行

$row = $stmt->fetchALL(PDO::FETCH_ASSOC); //fetchALL:すべてのレコード、FETCH_ASSOC:連想配列

// var_dump($row);

foreach ($row as $member)
{
	echo $member['name'] . 'さん<br>';
}
