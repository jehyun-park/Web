<?php
session_start();
include "config/db.php";
include "password.php";

$user_id = $_POST['user_id'];
$user_pass = $_POST['user_pass'];

$sql = "select user_pass,user_id,user_name from member where user_id='".$user_id."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$hash_pw = $row['user_pass'];

if (password_verify($user_pass,$hash_pw)) {
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_name'] = $row['user_name'];

    echo "<script>alert('로그인이 되었습니다');location.href='/';</script>";

} else {
   echo "<script>alert('아이디 혹은 비밀번호를 확인하세요');history.back();</script>";
}
?>