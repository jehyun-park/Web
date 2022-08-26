<?php
include "../config/db.php";

$sql = "select * from notice where board_idx=".$_GET['board_idx'];
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/layout.css">
</head>
<body>
    <!--전체를 감싸는 태그-->
<div id="page-wrapper">
    <!--헤더영역-->
    <?php
    include "../header.html";
    ?>
    <!--메뉴영역-->
    <?php
    include "../menu.html";
    ?>
    <!--본문영역-->
    <div id="content">
        <!--본문 가운데 영역-->
        <section id="main-section">
            <!--본문 첫번째 영역-->
            
            <article>
                <!--본문 타이틀-->
                <div>                    
                     <table>
                        <tr>                 
                            <td colspan="2" style="height:50px; text-align:center;border-top:1px solid #333; border-bottom:1px solid #333; background-color:#eee; padding:10px;">
                            <h1 style= "font-size:30px; font-weight:bold; "><?php echo $row['board_title'];?></h></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="height:150px;padding:30px;">
                            <?php echo $row['board_memo'];?>
                            </td>
                           
                        </tr>   
                        <tr>
                            
                            <td colspan="2" style="text-align:center;"><img src="upload/<?php echo $row['file']?>"></td>
                        </tr>   
                        <tr>
                            <td colspan="2" style="text-align:center; height:50px;">
                            <a href="notice_list.php"><input type="button" value="글목록" style="width: 110px; height:30px; background-color:#eee; border 1px solid #333; font-size:13px;cursor:pointer;"></a>

                            <a href="notice_edit.php?board_idx=<?php echo $row['board_idx'];?>"><input type="button" value="글수정" style="width: 110px; height:30px; background-color:#eee; border 1px solid #333; font-size:13px;cursor:pointer;"></a>

                            <a href="notice_edit.php?board_idx=<?php echo $row['board_idx'];?>"><input type="button" value="글삭제" style="width: 110px; height:30px; background-color:#eee; border 1px solid #333; font-size:13px; cursor:pointer;"></a>
                        </td>
                            
                        </tr>          
                     </table>
                     <table style="width:80%; margin: 0 auto;border:1px solid #ccc;">
                        <tr>
                            <td colspan="2" >댓글</td>
                        </tr>

                        <tr>
                            <td>글내용보기</td>
                        </tr>
                    </table>
                    <form action="reply_ok.php" method="post">
                        <input type = "hidden" name="board_idx" value="<?php echo $row ['board_idx'];?>">
                        <input type ="hidden" name="reply_id" value="<?php echo $_SESSION['user_id'];?>">
                        <input type ="hidden" name="reply_name" value="<?php echo $_SESSION['user_name'];?>">

                    <table style="width:80%; margin: 0 auto; ">
                        <tr>
                            <td style="width:90%; text-align:right;"><textarea name="reply_memo"  style="width:98%;height:31px; border:1px solid #ccc; font-size:15px;"></textarea></td>

                            <td style="width:10%; vertical-align:top; padding-left: 2px;"><input type="submit" value="확인" style="width:33px; height:33px; border:1px solid #ccc; font-size:12px;" ></td>
                        </tr>
                    </table>

                </form>
                </div>
            </article>
            
        
        </section>
        <!--본문 우측 영역-->
        <?php
        include "../aside.html";
        ?>
    </div>
    <!--푸터영역-->
    <?php 
    include "../footer.html";
    ?>

</div>
    
</body>
</html>