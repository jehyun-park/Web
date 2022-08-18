<?php
include "../../config/db.php";

$sql = "select * from notice where board_idx=" .$_GET['board_idx'];
$result = mysqli_query($con, $sql);
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
    <link rel="stylesheet" href="../css/layout.css" />
</head>
<body>
    <!--전체를 감싸는 태그-->
    <div id="page-wrapper">
      <!--헤더영역(로고)-->
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
          <!--본문 첫번쨰 영역-->
          
          <article>
            <!-- 본문 타이틀-->
            <div class="notice_write">
                <form method="post" action="notice_write_ok.php" enctype="multipart/form-data">
                    <table>
                        <tr>
                            <td>제목: </td>
                            <td><?php echo $row['board_title'];?></td>
                        </tr>

                        <tr>
                            <td colspan="2" class="notice_memo">
                            <?php echo $row['board_memo'];?></textarea>
                            </td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td><img class="notice_write_file" src="upload/<?php echo $row['file']?>"> </td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="글등록" class="notice_write_btn"></td>
                            
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