<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $arrays =  array('reo', 'rea', 'reu');
    echo $arrays[1].'<br>';
    echo count($arrays);
    var_dump($arrays);
    array_push($arrays, '123', '12345','1233456');
     ?>
  </body>
</html>
