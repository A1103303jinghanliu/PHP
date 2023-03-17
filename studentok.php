<?php
session_start();
if($_SESSION["loginstu"]=="studentYes"){
    echo $_SESSION["loginstu"];
}else if($_SESSION["loginstu"]=="fromteacher"){
    echo $_SESSION["loginstu"];
}else if($_SESSION["logintea"]=="frompresident"){
    header("Location:error.php");
}else{
    header("Location:error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>學生網頁</title>
</head>
<body>

學生登入頁面<br/>

<a href="logout.php">登出</a>

</body>
</html>