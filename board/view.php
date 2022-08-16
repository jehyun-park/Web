<?php
include "../config/db.php";

$sql1 = "update board set board_hit= board_hit + 1 where board_idx=".$_GET['board_idx'];
$result1 = mysqli_query($con,$sql1);

$sql = "select * from board where board_idx=" .$_GET['board_idx'];
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {width: 700px; margin:0 auto;}
.a{height: 100px; font-size:30px; text-align:center; background-color:#eee; font-weight:1000;font-style:italic;}
.b{height: 70px; border-top:1px;text-align:right;}
.c{height: 120px; background-color:#eee}
.d{text-align:center}
 a:link{color:#333; text-decoration:none;}
 a:hover{color:red; text-decoration:underline;}
 caption{text-align:left}

</style>
<body>
    <table>
        <caption><h2>게시판</h2></caption>
        <tr>
            <td class="a"><?php echo $row ['board_title'];?></td>
        </tr>
        <tr>
            <td class="b">작성자: <?php echo $row ['board_name'];?>&nbsp;<br>
                작성일: <?php echo $row ['board_date'];?>&nbsp;<br>
                조회수: <?php echo $row ['board_hit'];?>
        </td>
        </tr>
        <tr>
            <td class="c"><?php echo $row['board_memo'];?></td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="d"><a href="list.php">목록</a>&nbsp;
            <a href="write.html">등록</a>&nbsp;
            <a href="update.php?board_idx=<?php echo $row['board_idx'];?>">수정</a>&nbsp;
            <a href="del.php?board_idx=<?php echo $row['board_idx'];?>">삭제</a>&nbsp;
        </tr>
    </table>
</body>
</html>