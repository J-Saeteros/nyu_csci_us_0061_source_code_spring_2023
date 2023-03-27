<!doctype html>
<html lang="en-us">
  <head>
    <title>PHP Introduction</title>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>PHP & Server-Side Programming</h1>

    <?php
      error_reporting(E_ALL);
      ini_set("display erros", 1);

      $var1 = 'hello';
      $var2 = 5;
      $var3 = 5.7;
      $var4 = true;

      // casting in php
      $var5 = '12345';
      $var6 = intval($var5);
      $var7 = (int) $var5;

      print $var1;
      print "<br>";
      print $var2;
      print "<br>";
      print $var3;
      print "<br>";
      print $var4;
      print "<br>";
    ?>
    
  </body>
</html>
