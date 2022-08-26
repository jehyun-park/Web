<?php
session_start();
include "config/db.php";
include "password.php";

$user_id = $_POST['user_id'];
$user_pass = $_POST['user_pass'];
$user_pass1 = $_POST['user_pass1'];

if ($user_pass <> $user_pass1) {
    echo "<script>alert('비밀번호와 비밀번호 확인이 맞지 않습니다.');history.back();</script>";
} else {

$new_pass = password_hash($_POST['user_pass'],PASSWORD_DEFAULT);    

$user_name = $_POST['user_name'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];
$user_postcode = $_POST['user_postcode'];
$user_addr = $_POST['user_addr'];
$user_addr1 = $_POST['user_addr1'];
$user_intro = $_POST['user_intro'];
$user_date = date("Y-m-d H:i:s");
$user_ip = $_SERVER['REMOTE_ADDR'];

$sql = "insert into member(user_id,user_pass,user_name,user_phone,user_email,user_postcode,user_addr,user_addr1,user_intro,user_date,user_ip) values ('".$user_id."','".$new_pass."','".$user_name."','".$user_phone."','".$user_email."','".$user_postcode."','".$user_addr."','".$user_addr1."','".$user_intro."','".$user_date."','".$user_ip."')";


mysqli_query($con,$sql);

echo "<script>alert('회원가입을 하였습니다.');location.href='login.php';</script>";
}
?>