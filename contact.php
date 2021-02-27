<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>تماس با ما</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<style>
			body{
				text-align:	right;
				direction:	rtl;
			}
		</style>
	</head>
	<body class = "container">
		<?php
		echo
		'<p class = "alert alert-success alert-dismissible" role = "alert">با موفقیت ثبت شد!
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</p>';

		//var_dump( $_POST );
		echo 'نام شما: ' . $_POST['name'] . '<br>';
		echo 'متن پیام شما: ' . $_POST['message'];

		// 1. اتصال به ديتابيس
		$dbc = new mysqli ( 'localhost', 'root', '', 'mobtaniDB' );

		// 2. ايجاد کوئري
		$sql = "INSERT INTO messages (name, email, message) 
		VALUES('{$_POST['name']}', '{$_POST['email']}', '{$_POST['message']}')";

		// 3. اجرای کوئری
		$dbc -> query( $sql );

		// 4. بستن اتصال
		$dbc -> close();

		?>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>