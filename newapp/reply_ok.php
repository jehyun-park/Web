<?php
session_start();
include "../config/db.php";

$board_idx = $_POST['board_idx'];
$reply_id = $_POST['reply_id'];
$reply_name = $_POST['reply_name'];
$reply_memo = $_POST['reply_memo'];
$reply_date = date("Y-m-d H:i:s");

$sql = "insert into reply (board_idx,reply_id,reply_name,reply_memo,reply_date) values ('".$board_idx."','".$reply_id."','".$reply_name."','".$reply_memo."','".$reply_date."')";

echo $sql;
mysqli_query($con,$sql);

?>
<script>
    alert("글을 등록하였습니다.");
    location.href = "norice_memo.php?board_idx=".$board_idx."";
    </script>