<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {width: 600px; margin=0 auto;}
        td {text-align:center; border:1px solid #3333; height: 40px;}
        .a{background-color:#000; color:white;}
    </style>
</head>
<body>
<form method="post" action="del_ok.php">
    <input type="hidden" name= "board_idx" value="<?php echo $_GET['board_idx']?>">
<table>
    <caption><h2>게시판</h2></caption>
<tr>
        <td class="a">게시물 삭제</td>
</tr>
<tr>
    <td><input type="password" name="pass" placeholder="비밀번호를 입력하세요." required></td>
</tr>
<tr>
    <td><input type = "submit" value="삭제"></td>
</tr>
</table>
</form>
</body>
</html>