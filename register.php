<?php
include "service/database.php";

if(isset($_POST["register"])){
$user = $_POST["username"];
$password = $_POST["password"];

$sql = "INSERT INTO been (username, password) VALUES
('$user' ,  '$password')";

    if($db->query($sql)){
        echo "Pendaftaran Berhasil";
    }else{
        echo "Maaf Username Yang Anda Masukkan Tidak Valid";
        }

    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <div class="alt">
	<h1><br/>Daftar Beem <span style="color: #a56f1b;">Movie</span></h1>
</div>
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan Daftar</p>
 <hr />
		<form action="register.php" method="POST">
			<label>Username</label>
			<input type="text" class="form_login" placeholder="username" name="username">
            
			<label>Password</label>
			<input type="password" class="form_login" placeholder="password" name="password"> 

			<button type="submit" class="tombol_login" name="register">DAFTAR</button>
 
			<br/>
			<br/>
			<center>
			<p>Sudah Memiliki Akun ? <a style="color: #9d712d;" href="http://localhost/Baru-Ngoding/login.php" >Login</a></p>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>
</div>
    <style>
    body{
	font-family: sans-serif;
    background-image: url("img/kopi.jpeg");
}
.alt{
    text-shadow:1px 1px 3px rgba(1, 1, 3, 0.5);
    color: #fff;
	font-family: arial;
}
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 5px 20px;
	border: 2px solid #9d712d;
	border-radius: 2px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
	border: 2px solid #9d712d;
	border-radius: 2px;
	background-color: #fff;
}
 
.tombol_login{
	background: #9d712d;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}

.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}</style>
</body>
</html>