<html>
<head>
<meta charset="UTF-8">
<title>111學年資管系系烤報名資料</title>
</head>

<body background="img/bbq2.jpg">
<center>
<h1>111年學資管系系烤</h1>
<h2>系烤報名資料</h2>
</center>
<hr size="3" color="black">

<?php
if(isset($_POST["id"])){
$id=$_POST["id"];
echo "學號：".$id."<br/>";
}else{
    echo "資料輸入錯誤";
}

if(isset($_POST["name"])){
$name=$_POST["name"];
echo "姓名：".$name."<br/>";
}else{
    echo "資料輸入錯誤";
}

echo "是否參加本次系烤：";
if(isset($_POST["join"])){
$join=$_POST["join"];
if($join=="yes"){
    echo "是<br/>";

echo "葷素調查：";
if(isset($_POST["MorV"])){
$MorV=$_POST["MorV"];
if($MorV=="meat"){
    echo "葷食<br/>";
}else{
    echo "素食<br/>";
}
}

echo "繳交費用：";
if(isset($_POST["fee"])){
$fee=$_POST["fee"];
if($fee=="100"){
    echo "$100<br/>";
}else{
    echo "$150<br/>";
}
}

$comment=$_POST["comment"];
echo "希望系烤增加什麼活動：<br/>";
echo nl2br(strip_tags($comment));

}else{
    echo "否<br/>";
}
}
?>

</body>

</html>