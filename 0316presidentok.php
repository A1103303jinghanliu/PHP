<?php
session_start();
if($_SESSION["login"]=="presidentYes"){
    echo $_SESSION["login"];

}else{
    header("Location:0316error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>校長網頁</title>
</head>
<body>

校長登入頁面<br/>
<a href="0316teacherok.php">教師頁面<br/></a>
<a href="0316logout.php">登出</a>

</body>
</html>