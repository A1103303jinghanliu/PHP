<?php 
session_start();
ob_start();

if($_SESSION["login"]=="No"){

}else{
    header("Location:0316error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php
echo $_SESSION["login"];
header("Refresh:3;url=0316index.php")
?>

登入失敗！<br/>
網頁將在三秒後跳轉至登入頁面或<br/>
<a href="0316index.php">重新登入</a>


</body>
</html>
<?php ob_flush(); ?>