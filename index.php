<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php test</title>
</head>
<body>
    <div class="container">
      First php website
      <?php
      define('pie',3,14);
       echo "hello bro";
        $var1 =40;
        $var2=60;
        $var1=$var2;
        echo "value of var1 and va2 is:"; echo $var1 + $var2;
        echo "value of var1==var2 is:";
        echo var_dump(1==2);
        echo "<br>";
        $var1++;
        echo $var1;
        echo "<br>";
        echo var_dump($var1);
        echo "<br>"; echo var_dump("hello man how are you");

     ?>
    </div>
</body>
</html>