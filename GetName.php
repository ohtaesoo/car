<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $i = rand(1,8);
    echo $i;
    echo $_POST['Name'];
    header("Location: /car/result".$i.".php?id=".$_POST["Name"]);
    ?>
  </body>
</html>
