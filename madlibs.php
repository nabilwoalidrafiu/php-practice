<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad libs Game</title>
</head>
<body>
    <form action="madlibs.php" method="get"
    >
    Color: <input type="text" name="color"> <br>
    Plural Noun: <input type="text" name="pluralNoun"><br>
    Celebrity: <input type="text" name="celebrity">
    <input type="submit">
    </form>
    <br><br>
    <?php 
    if (isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])) {
        
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "This is $color <br>";
        echo "This is $pluralNoun <br>";
        echo "This is $celebrity <br>";

    }
        
    ?>
</body>
</html>