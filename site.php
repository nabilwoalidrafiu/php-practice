<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>
    <!-- associative array -->
    <form action="site.php" method="post">
        <input type="text" name="student">
        <input type="submit" value="Submit">
    </form>
    <?php
    

        // echo("hello vai");
        // echo "<br>";
        // echo "without bracket";
        // echo "<hr>";
        // echo "<h1>Hello H1</h1>";
        // echo "<p> paragraph</p>";
        // echo "<hr>";
        // $personName = "Mihrab";
        // $age = 28;
        // echo "This is $personName.<br>";
        // echo "He is $age years old.<br>";
        // $personName = "Tamim";
        // $age = '20';
        // echo "This is $personName.<br>";
        // echo "He is $age";
        // echo "<hr>";
        // echo strToUpper($personName); 
        // echo "<br>";
        // echo strToLower($personName);
        // echo "<br>";
        // echo strLen($personName);
        // echo "<br>";
        // echo "<String>";
        // $playerName = "Shakib Al Hasan";
        // echo $playerName;
        // echo $playerName[4];
        // echo "<br>";

        // $playerName[3] = "j";
        
        // echo $playerName;
        // echo "<hr>";
        // echo str_replace("Shajib", "Rakib", $playerName);
        // echo "<hr>";
        // echo str_replace("Al", "Ibn", $playerName);
        // echo "<hr>";
        // echo substr($playerName, 9, 4)


        // array
        $friends = array("Rahim", "Karim", "Jahid", "Abullah");
        echo $friends[3];
        echo $friends[4] ="Sakib";
        echo $friends[4];
        echo "<hr>";


        //associative array
        $grades = array("Fahim" => "A+", "Karim" => "B+", "Fahad" => "C+");
        echo $grades["Karim"];
        echo "<br>";
        $grades["Fahad"]= "F";

        echo $grades["Fahad"];
        echo "<br>";
        echo count($grades);
    echo "<br>";
       if (isset($_POST["student"])) {
        echo $grades[$_POST["student"]];
       }
        // not working
     ?>

        
</body>
</html>