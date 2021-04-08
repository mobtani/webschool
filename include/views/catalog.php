<!doctype html>
<html lang="fa">
<head>
<title>خرید تلفن همراه</title>
<meta charset = 'utf-8'>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
<style>
body{
font-size:large;
}
body{
      background:linear-gradient(
			90deg,
		  rgba(145, 228, 193, 0.897),
		  rgba(215, 187, 235, 0.9)
					);
      font-size:large;
    }
		form{
			text-align: right;
		}	
</style>
<link   href="assets/css/style.css"   rel="stylesheet"   type="text/css">
</head>

	<body class="body">
	<header>



     
	<nav id = "mainNav">
		<ul>
  <li> <a href="../index.html">خانه</a> </li>
   <li> <a href="#">خرید</a> </li>
  <li> <a href="addProduct.html">فروش</a> </li>
  <li><a href="adduser.html">ثبت نام</a></li>
  <li><a href="contact.html">ارتباط با ما</a></li>
    </ul>
 
    </nav>
</header>

<main>
<?php
foreach($table as $row){
    include __DIR__ .'/templates/productCard.php';
}
?>
</main>
 </body>
</html>