<?php
include "../config/db.php";


$sql = "select * from board order by board_notice desc, board_idx desc";
$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{width: 900px; margin:0 auto;}
        th {background-color: #333; height: 40px; color:white}
        .a{text-align:center}
        span {color:red; font-weight:bold;}
        td{height: 35px}
        a:link{color:#333; text-decoration:none;}
        a:hover{color:#333; text-decoration:underline;}
        a:visited {color:#;}
    </style>

</head>
<body>
<table>
    <caption><h2>게시판</h2></captiom>
<tr>
    <th width="7%">번호</th>
    <th>제목</th>
    <th width="15%">이름</th>
    <th width="15%">날짜</th>
    <th width="7%">조회</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)){
?>
<tr class="b">
    <td class="a">
    <?php
    if ($row['board_notice']==1){
      echo "<span>공지</span>";
    }else{
        echo $row['board_idx'];
    }?></td>
    
    <td>
    <?php
    if(strlen($row['board_title']) >30 ){
        $row['board_title'] = str_replace($row['board_title'], mb_substr($row['board_title'],0,30,"utf-8")."...", $row['board_title']);
    }  ?>  
    <a href="view.php?board_idx=<?php echo $row ['board_idx'];?>">
    <?php echo $row['board_title'];?></a>
</td>
    <td class="a"><?php echo $row['board_name'];?></td>
    <td class="a"><?php echo substr($row['board_date'],0,10);?></td>
    <td class="a"><?php echo $row['board_hit'];?></td>
</tr>
<?php
}
?>
</table>
    
</body>
</html>