<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Calculator</title>
</head>
<body>
    <form action="fullCalculator.php" method="post">
        First Number: <input type="number" step="0.000001" name="num1"><br><br>
        Op: <input type="text" name="op"><br><br>
        Second Number: <input type="number"  step="0.000001" name="num2"><br><br>
        <input type="submit">
    </form>
 
    <?php     
        if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["op"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op = $_POST["op"];

            if ($op == "+") {
                echo $num1 + $num2;
            }else if($op == "-") {
                echo $num1 - $num2;
            }else if ($op == "*"){
                echo $num1 * $num2;
            }else if ($op == "/"){
                echo $num1 / $num2;
            }else{
                echo "invalid operator";
            }
        }  
   ?>
</body>
</html>