<!DOCTYPE html>
<html lang = "pl">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Martyna,Damian,Pilny, wesele, kwiecień, Modrzewiowy dwór,narzeczeni, zakochańcy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name = "description" content= "Martyna i Damian Pilny - wesele.
                                             Strona dla gości z opisem naszych przygotowań."/>
        <meta name = "author" content="Damian Pilny">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Martyna & Damian</title>
        
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Josefin+Sans|Liu+Jian+Mao+Cao|Raleway&display=swap" rel="stylesheet">
        <link rel ="stylesheet" href = "serwstyle.css"type="text/css"/> 
        <link rel ="stylesheet" href = "css/fontello.css" type = "text/css"/> 

        <script src="https://public-assets.envato-static.com/assets/market/pages/full_screen_preview/index-1cc9e02a5e4e48ac2ba5b45a45c05b32584f9580c2fa432bcd2e40dd0b2a2ec2.js"></script>
        <script src = "scroll.js"></script>
        <script src = "heart.js"></script>
    </head>

<body>

    <!-- HEADER / HOME-->

    <header class = "bgimg header" id = "home">
        <div class = "Intro">
    
            <h1><a href="index.php" class = "h1_serwIntro">Dziękujemy za informacje</a></h1>

        </div>   
    </header>
<?php 
$serwerName = "localhost";
$dbUser = "33923264_wesele";
$dbPassword = "weselehej96";
$dbSubModule = "33923264_wesele";
$connect = mysqli_connect($serwerName, $dbUser, $dbPassword, $dbSubModule);
   
        $name = $_POST['formName'];
    
     if(isset($_POST['clickYES']))
     {
       $sql = "INSERT INTO Potwierdzone (name)
           VALUES ('$name')";
        
        mysqli_query($connect, $sql);
    }    
    if(isset($_POST['clickNO']))
     {
       $sql = "INSERT INTO Niepotwierdzone (name)
           VALUES ('$name')";
        
        mysqli_query($connect, $sql);
    } 
        
    mysqli_close($connect);
?>
</body>
</html>