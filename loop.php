<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <?php 
    // while loop
        $index =1;
        while($index <= 5){
            echo "$index <br>";
            $index++;
        }
        echo "<hr>";
    //do while loop
        $index = 6;
        do{
            echo "$index <br>";
            $index++;
        } while ($index <= 5);
        echo "<hr>";
    // for loop
        for ($index = 0; $index <=10 ; $index++) { 
            echo "$index <br>";
        }
        echo "<hr>";
        
        $luckyNumbers = array(3, 4, 5, 7, 8 ,9);
        for ($i=0; $i < count($luckyNumbers); $i++) { 
            echo "$luckyNumbers[$i] <br>";
        }
    ?>
</body>
</html>