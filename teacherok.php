<?php
session_start();
if($_SESSION["logintea"]=="teacherYes"){
    echo $_SESSION["logintea"];
}else if($_SESSION["logintea"]=="frompresident"){
    echo $_SESSION["logintea"];
}else{
    header("Location:error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>教師網頁</title>
</head>
<body>

教師登入頁面<br/>
<a href="studentok.php">學生頁面<br/></a>
<a href="logout.php">登出</a>

</body>
</html>