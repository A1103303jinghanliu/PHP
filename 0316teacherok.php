<?php
session_start();
if($_SESSION["login"]=="teacherYes"){
    echo $_SESSION["login"];
}else if($_SESSION["login"]=="presidentYes"){
    echo $_SESSION["login"];
}else{
    header("Location:0316error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>教師網頁</title>
</head>
<body>

教師登入頁面<br/>

<a href="0316studentok.php">學生頁面<br/></a>
<a href="0316logout.php">登出</a>

</body>
</html>