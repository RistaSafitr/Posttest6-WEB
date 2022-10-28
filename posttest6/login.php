<?php
    if(isset($_POST['submit'])){
        $username = $_GET['regisUsername'];
        $password = $_GET['regisPassword'];
        $query = mysqli_query($db, "SELECT * FROM users WHERE username = $_GET[regisUsername] AND password = $_GET[regisPassword]");
        if($query) {
            echo "
                <script>
                    alert('Login Berhasil!!!');
                    location.href = 'home.html';
                </script>
                "; 
        } else {
            echo "
                <script>
                    alert('Gagal Login!!!');
                    location.href = 'login.php';
                </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 5 - Jasa Print Online Samarinda </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css" type='text/css'>
    <script src="jquery.js"></script>
</head>
<body>
    <div class="header">
            <div class="header-logo">Print Online Samarinda</div>
            <div class="header-item">
                <ul>
                    <li><button id="mode"><img src="logo/icons8-180-degree-30.png" alt="dark mode"></button></li>
                    <li><img src="logo/icons8-cart-32.png" alt="cart"></li>
                    <li>Login/Daftar</li>
                    <li>Akun</li>
                    <li><a href="home.html" style="text-decoration: none;">Beranda</li></a>
                </ul>
            </div>
    </div>

    <div class="main">
        <div class="main-login">
                <center><h2 id="login-judul">Login/Daftar</h2> <br><br></center>
                <img class="login-pic" src="image/acount-concept.jpg" alt="" height="300px" width="300px" style="float:left;">
                <form class="login" action="home.html" method="post">

                    <label for="username">Username</label> <br>
                    <input type="text" name="username" id="username" required> <br>

                    <label for="password">Password</label> <br>
                    <input type="password" name="password" id="password" required> <br><br>

                    <input type="submit" name="submit" value="Log In"> <br><br>

                    <p>Belum Punya Akun? <a href="registrasi.php">Register</a></p>
                    
                </form>
        </div>
    </div>

    <?php
    require "config.php";
    $query = mysqli_query($db, "SELECT * FROM users");
    $result = mysqli_fetch_array($query);
        if(isset($_POST['submit'])){
            if($_GET['username'] == $_result['regisUsername']){
                if($_GET['password'] == $_result['regisPassword']){
                    echo "
                        <script>
                            alert('Login Berhasil!!!');
                            location.href = 'home.html';
                        </script>
                    ";  
                }
                else {
                    echo "<center><h1>Username atau Password Salah !!</h1></center>";
                }
            }
        }
    ?>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
    <script src="javaScript.js"></script>
</body>
</html>