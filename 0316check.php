<?php
session_start();

$studentID="a1103303";
$studentPWD="a1103303";

$teacherID="teacher";
$teacherPWD="teacher";

$presidentID="president";
$presidentPWD="president";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($studentID==$id)&&($studentPWD==$pwd)){
    $_SESSION["login"]="studentYes";
    header("Location:0316studentok.php");
}else if(($teacherID==$id)&&($teacherPWD==$pwd)){
    $_SESSION["login"]="teacherYes";
    header("Location:0316teacherok.php");
}else if(($presidentID==$id)&&($presidentPWD==$pwd)){
    $_SESSION["login"]="presidentYes";
    header("Location:0316presidentok.php");
}else{
    $_SESSION["login"]="No";
    header("Location:0316fail.php");
}

?>