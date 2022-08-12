<?php
include "../config/db.php";

$sql = "select * from board where board_idx=".$_GET['board_idx'];
echo $sql;
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{width: 700px; border: 1px solid black; margin: 0 auto;}
        td.t1{width: 100px; text-align: center; height: 35px;
        background-color: #333; color: white;}
        td.t2{width: 600px;}
        td.t3{text-align: center;}
        textarea{width: 99%; height: 200px;}
        
    </style>
    <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

</head>
<body>
<form method="post" action="update_ok.php">
    <input type="hidden" name="board_idx" value="<?php echo $row['board_idx'];?>">
    <table>
        <caption><h2>게시판</h2></caption>
        <tr>
            <td class="t1">제목</td>
            <td class="t2"><input type="text" style="width: 80%; height: 28px" name="title" placeholder="제목을 입력하세요" required value="<?php echo $row['board_title']?>"><input type="checkbox" name="notice" value="1">
            <?php if ($row['board_notice']==1){?>checked<?php }?>>공지</td>
        </tr>
        <tr>
            <td class="t1">작성자</td>
            <td class="t2"><input type="text" style="width: 30%; height:28px"   name="name" placeholder="이름을 입력하세요." value="<?php echo $row['board_name']?>" required></td>
        </tr>
        
        <tr>
            <td class="t3" colspan="2"><textarea name="editor1" required>    <?php echo $row['board_memo']?>   </textarea>
            <script>
                CKEDITOR.replace('editor1');
            </script>
            </td>
        </tr>
        <tr>
            <td class="t1">비밀번호</td>
            <td class="t2"><input type="password" style="width: 30%; height: 28px;" name="pass" required placeholder="비밀번호를 입력하세요."></td>
        </tr>
       
        <tr>
            <td class="t3" colspan="2"><input type="submit" value="등록" style="width: 70px; height:35px; background-color: #3333;      border: 0px; color:black; font-weight: bold;" ></td>
        </tr>

    </table>
</form>
</body>
</html>