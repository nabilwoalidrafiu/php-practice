<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including PHP</title>
</head>
<body>
    <?php
     $title="Dopamin Detox";
     $author = "Mike";
     $wordCount = 400;
      include "article-header.php"; ?>
    echo "<hr>"
      <?php 
      include "function.php";
        echo sayHello("nabil");
        echo $roll;
      ?>
</body>
</html>