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
                            <td>제목</td>
                            <td><input type="text" name="title"  class="notice_write_title"></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                            <textarea name="memo" class="notice_memo" rows="5"></textarea>
                            </td>
                        </tr>  
                        <tr>
                            <td></td>
                            <td><input type="file" name="file" class="notice_write_file"></td>
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