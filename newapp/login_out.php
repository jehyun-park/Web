<?php
session_start();

$result = session_destroy();

if ($result) {
    echo "<script>alert('로그아웃이 되었습니다.');location.href='/';</script>";
}
?>