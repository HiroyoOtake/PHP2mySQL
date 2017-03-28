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

/* レコード挿入その1
$sql = "insert into members (name, email, password) values
	('ito', 'ito@example.com', '3333')";
$stmt = $dbh->prepare($sql);

$stmt->execute();
 */

/* レコード挿入その2
// $sql = "insert into members (name, email, password) values (?, ?, ?)";
$sql = "insert into members (name, email, password) values (:name, :email, :password)"; // ?でもできるが何が入ってるか分かり辛いのでこっちの書き方でもよい
$stmt = $dbh->prepare($sql);

$stmt->execute(
	array(
		":name" => "yamada",
		":email" => "yamada@example.com",
		":password" => "5555"
	)
);

echo '成功しました!';
*/

/* レコード挿入その3 */
$sql = "insert into members (name, email, password) values (:name, :email, :password)";
$stmt = $dbh->prepare($sql);

// 値をバインド(代入)する
// $stmt->bindParam(プレースホルダー,値);
$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":password",$password);

$name = "takahasi";
$email = "takahashi@example.com";
$password = "6666";

$stmt->execute();
		
echo '成功しました!';
