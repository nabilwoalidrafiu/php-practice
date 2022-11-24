<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Orange: <input type="checkbox" name="fruits[]" value="orange"><br>
        Mango: <input type="checkbox" name="fruits[]" value="mango"><br>
        Banana: <input type="checkbox" name="fruits[]" value="banana"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    
        if(isset($_POST['fruits'])){
            $fruits = $_POST["fruits"];
            echo $fruits[2];
        }
    ?>
</body>
</html>