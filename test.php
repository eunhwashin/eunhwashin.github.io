<?php
  $name = $_GET['nickname'];
  $chk = $_GET['chk'];
  $nonchk = $_GET['nonchk'];
?>


<!doctype html>
<html lang="ko">
  <head>
  <meta charset="utf-8">
    <title>HTML</title>
    <style>
      * {font-size: 18px; margin: 50px; padding:0;}
      p > span {font-size:20px; font-weight: bold;}
    </style>
  </head>
  <body>  
   
    <p>Ur name is <span> <?php echo $name ?> ?! </span></p>
    <p>Ur choice is <span> <?php echo $chk ?> ?! </span></p>
    
  </body>
</html>
