-- データベースへの接続について
-- データベースの準備

-- データベースの作成
create database nowall;

-- 作業ユーザーとパスワードの設定
grant all on nowall.* to testuser identified by '9999';
-- MySQLを終了し、作業ユーザーでログイン
exit;

mysql -u testuser -p

-- 使用するデータベースの指定
use nowall;
-- テーブルの作成
create table members (
	id int primary key auto_increment,
	name varchar(32),
	email varchar(100),
	password varchar(32)
);

-- テストレコードの挿入
insert into members (name, email, password) values
  ('suzuki', 'suzuki@example.com', '1111'),
  ('tanaka', 'tanaka@example.com', '2222');
