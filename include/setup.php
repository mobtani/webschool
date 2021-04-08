<?php
include 'setting.php';
include 'functions.php';

$db = new DB( false );
if( ! $softSetup ) {
	$sql = "DROP DATABASE IF EXISTS {$dbName}";
	$db->execute($sql);
	alerts("دیتابیس {$dbName} و جداول آن حذف شد", 'success');
} // در غیر اینصورت دیتابیس فعلی را حفظ کن و جداول جدید را بیافزا

$sql = "CREATE DATABASE IF NOT EXISTS {$dbName}
		CHARSET {$charset}
		COLLATE {$collate}";
$result = $db -> execute( $sql );
if( $result )
	alerts('دیتابیس {$dbName} با موفقیت ایجاد شد', 'success');

unset( $db );
$db = new DB(); // همراه با انتخاب دیتابیس

$sql = "CREATE TABLE IF NOT EXISTS messages(
		id INT AUTO_INCREMENT NOT NULL,
		name VARCHAR(50),
		email VARCHAR(50),
        title VARCHAR(50),
		body TEXT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول پیام با موفقیت ایجاد شد', 'success');

$sql = "CREATE TABLE IF NOT EXISTS Product(
		id INT AUTO_INCREMENT NOT NULL,
		name VARCHAR(50),
		price INT,
		imgSrc VARCHAR(255),
		description TEXT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول ثبت نام با موفقیت ایجاد شد', 'success');

    $sql = "CREATE TABLE IF NOT EXISTS Register(
		id INT AUTO_INCREMENT NOT NULL,
		userr VARCHAR(50),
		pass VARCHAR(20),
        emaill VARCHAR(50),
        mobile INT,
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$result = $db -> execute( $sql );
if( $result )
	alerts('جدول محصول با موفقیت ایجاد شد', 'success');


$alerts = alerts();

		
				if( isset($alerts) )
					echo $alerts;
			
?>