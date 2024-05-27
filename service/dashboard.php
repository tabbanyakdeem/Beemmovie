<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .form_dashboard{
            width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 80px auto;
	padding: 5px 20px;
	border: 2px solid #9d712d;
	border-radius: 2px;
    height: 30vh;
    background-color: #f97427;
        }

        .form_login{
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-bottom: 20px;
            border: 2px solid #9d712d;
border-radius: 2px;
background-color: #fff;
        }

        .tombol-login{
            background-color: #0044a9;
            border: 2px solid #9d712d;
            width: 100%;
            padding: 10px;
            cursor: pointer;
            color: #fff;
            text-shadow: 1px 0.8px 0.5px rgba(0,0,0, 0.8);
        }
    </style>
<center><h1>KITA KASIH MADU UNTUK DIA YANG MANIS</h1></center>

<form class="form_dashboard" action="dashboard.php" method=POST>
    <input type="text" class="form_login" placeholder="Username" name="username">
    <input type="text" class="form_login" placeholder="Password" name="password">
    <button class="tombol-login" type="submit">Login</button>
</form>
</body>
</html>