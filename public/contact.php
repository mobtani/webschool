<?php
$dbc = new mysqli('sql201.b6b.ir', 'b6bi_27916015', 'Qwertyui0913', 'b6bi_27916015_ertebat'); // mysqli_connect
$sql = "INSERT INTO message(name,email,title, body)
		VALUES('{$_POST['user']}','{$_POST['email']}','{$_POST['title']}', '{$_POST['message']}')";
$result = $dbc -> query( $sql ); // mysqli_query
$dbc -> close(); //mysqli_close
// C. success message
echo 'پیام با موفقیت ثبت شد';
?>