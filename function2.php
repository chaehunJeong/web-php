<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
      function basic() {
          print("php welcome1");
          print("php welcome2");
      }
      basic();
     ?>
     <h2>parmeter &amp; argument</h2>
     <?php
      function sum($i, $j) {
        print($i + $j);
        print("<br>");
      }
        sum(3,6);
        sum(1,4);
      ?>
      <h2>return</h2>
      <?php
      function sum2($left, $right) {
        return $left+$right;
      }
      print(sum2(2,4));
      file_put_contents('result.txt', sum2(2,4));
       ?>

  </body>
</html>
