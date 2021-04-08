<?php
$dbc = new mysqli('sql201.b6b.ir', 'b6bi_27916015', 'Qwertyui0913', 'b6bi_27916015_user'); // mysqli_connect
$sql = "INSERT INTO user(name,famil,email)
		VALUES('{$_POST['user']}','{$_POST['famil']}','{$_POST['email']}')";
$result = $dbc -> query( $sql ); // mysqli_query
$dbc -> close(); //mysqli_close
// C. success message
echo 'ثبت نام شما انجام شد';
?>