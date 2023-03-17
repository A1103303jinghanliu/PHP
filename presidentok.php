<?php
session_start();
if($_SESSION["loginpre"]=="presidentYes"){

}else{
    header("Location:error.php");
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>校長網頁</title>
</head>
<body>
<?php

echo $_SESSION["loginpre"];

?>

校長登入頁面<br/>
<a href="teacherok.php">教師頁面<br/></a>
<a href="logout.php">登出</a>

</body>
</html>