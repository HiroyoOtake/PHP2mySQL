<?php
// 接続処理の外部化(別ファイルの読み込み)

// データベース接続の情報と処理を関数にして別のファイルにまとめる
// 接続するときはそのファイルを読み込む
// require_once()を利用する

require_once('functions.php');

$dbh = connectDb();
// functions.php内の関数でreturnしているので、結果的には下記の表現と同じ扱いになる
// $dbh = new PDO($dsn, $user, $password);

var_dump($dbh);
die;
