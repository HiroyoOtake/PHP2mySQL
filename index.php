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

$sql = "select * from members";
$stmt = $dbh->query($sql); //sqlを実行

//
$row = $stmt->fetchALL(PDO::FETCH_ASSOC); //fetchALL:すべてのレコード、FETCH_ASSOC:連想配列

// var_dump($row);
// die;
//
// array(2)
// {
// [0]=> array(4)
// 	{
// 		["id"]=> string(1) "1"
// 		["name"]=> string(6) "suzuki"
// 		["email"]=> string(18) "suzuki@example.com"
// 		["password"]=> string(4) "1111"
// 	}
// [1]=> array(4)
// 	{
// 		["id"]=>
// 		string(1) "2"
// 		["name"]=>
// 		string(6) "tanaka"
// 		["email"]=>
// 		string(18) "tanaka@example.com"
// 		["password"]=>
// 		string(4) "2222"
// 	}
// }


foreach ($row as $member)
{
	echo $member['name'] . 'さん<br>';
}
