<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body style="margin-top:50px;">
<div style="width:70%;margin:0 auto;border:1px solid #ccc">
<form method="post" action="login_ok.php">
  <div style="text-align:center;margin-top:40px;"><h2 style="font-size:25px;font-weight:bold;">로그인</h2></div>
  
  <div class="form-group" style="width:80%;margin:0 auto">
    <label for="exampleInputEmail1">아이디</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    required placeholder="아이디를 입력하세요" name="user_id";>
  </div>
  <div class="form-group" style="width:80%;margin:0 auto;">
    <label for="exampleInputPassword1" style="margin-top:10px;">비밀번호</label>
    <input type="password" class="form-control" id="exampleInputPassword1"
    required placeholder="비밀번호를 입력하세요" name="user_pass">
  </div>
  <!--<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>-->
  <div style="text-align:center;margin-top:20px;margin-bottom:50px">
    <button type="submit" class="btn btn-primary">로그인</button>
  </div>  
</form>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

   
  </body>
</html>