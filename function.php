<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
        function intro($name, $class){
            echo "Hello $name. Are you in class $class";
        }
        intro('Nabil', 12);
        echo "<hr>";
        function cube($num){
            return $num**3;
        }
        echo cube(4);
        echo "<br>";


        function getMax($num1, $num2){
            if($num1>$num2){
                return $num1;
            }else if($num2>$num1){
                return $num2;
            }
        }
        echo( getMax(100, 200));
        echo "<br>";

        function getMaximum($num1, $num2, $num3){
            if($num1>=$num2 && $num1>= $num3){
                return $num1;
            }else if($num2>=$num3 && $num2>= $num3){
                return $num2;
            }else{
               return $num3;
            }
        }
        echo( getMaximum(100, 200, 150));
    ?>
</body>
</html>