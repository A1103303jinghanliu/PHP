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
    $_SESSION["loginstu"]="studentYes";
    header("Location:studentok.php");
}else if(($teacherID==$id)&&($teacherPWD==$pwd)){
    $_SESSION["logintea"]="teacherYes";
    $_SESSION["loginstu"]="fromteacher";
    header("Location:teacherok.php");
}else if(($presidentID==$id)&&($presidentPWD==$pwd)){
    $_SESSION["loginpre"]="presidentYes";
    $_SESSION["logintea"]="frompresident";
    header("Location:presidentok.php");
}else{
    $_SESSION["login"]="No";
    header("Location:fail.php");
}

?>