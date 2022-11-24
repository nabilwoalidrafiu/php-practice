<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="switch.php"  method="post">
        What was your grade?
        <input type="text" name="grade"> <br>
        <input type="submit">
    </form>
    <?php
        if(isset($_POST["grade"])){
            $grade = $_POST["grade"];
            switch($grade){
                case "A":
                    echo "You got A";
                    break;
                case "B":
                    echo "You got B";
                    break;
                case "c":
                    echo "You got c";
                    break;
                default:
                    echo "invalid grade";
            }
        }
    
    ?>
</body>
</html>