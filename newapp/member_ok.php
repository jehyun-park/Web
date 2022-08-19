<?php
session_start();
include "config/db.php";

$user_id = $_Post['user_id']; 
$user_pass = $_Post['user_pass']; 
$user_pass1 = $_Post['user_pass1']; 


/*수정 필요  */
if ($user_pass <> $user_pass1){
  echo"<script>alert('비밀번호와 비밀번호 확인이 맞지 않습니다.');historyback();</script>";
} else{

$user_name = $_Post['user_name']; 
$user_phone = $_Post['user_phone']; 
$user_email = $_Post['user_email']; 
$user_postcode = $_Post['user_postcode']; 
$user_addr = $_Post['user_addr'];
$user_addr1 = $_Post['user_addr1']; 
$user_intro = $_Post['user_intro']; 
$user_date=date("Y-m-d H:i:s");
$user_ip=$_SERVER['REMOTE_ADDR'];

$sql = "insert into member(user_id,user_pass,user_name,user_phone,user_email,user_postcode,user_addr,user_addr1,user_intro,user_date,user_ip)values('".$user_id."','".$user_pass."','".$user_phone."','".$user_email."','".$user_postcode."','".$user_addr."','".$user_addr1."','".$user_intro."','".$user_date."','".$user_ip."')";

echo $sql;

mysqli_query($con,$sql);

echo"<script>alert('회원가입을 하였습니다.');location.href='login.php';</script>";

}


?>
