<?php

include "service/database.php";

if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM been WHERE username= '$username' AND password= '$password'";
        $result = $db->query($sql);
        if($result->num_rows > 0){
            echo"Masuk";
            header("Location: https://beemmoviee.blogspot.com/");
			die();	
        }else {
        echo "Akun Tidak Di Temukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard</title>
</head>
<div class="alt">
	<h1><br/> Login Beem <span style="color: #a56f1b;">Movie</span></h1>
</div>
<body>
    <div class="kotak_login">
		<p class="tulisan_login">Silahkan Login</p>
		<hr />
<form action = "login.php" method = "POST">
    <label>Username</label>
    <input class="form_login" type="text" placeholder="Username" name="username"/>
    <label>Password</label>
    <input class="form_login" type="password" placeholder="Password" name="password"/>
    <button class="tombol_login" type="submit" name = "login">LOGIN</button>
    <br/>
			<br/>
			<center>
				<p>Belum Memiliki Akun ? <a style="color: #9d712d;" href="http://localhost/Baru-Ngoding/register.php" >Daftar</a></p>
			</center>
</form>
<style>
    body{
	font-family: sans-serif;
    background-image: url("img/kopi.jpeg");
}
.alt{
    text-shadow:1px 1px 3px rgba(1, 1, 3, 0.5);
    color: #fff;
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
	border-radius: 2px;
	border: 2px solid #9d712d;
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
	border-radius: 2px;
	border: 2px solid #9d712d;
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