<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Basic Form</h1>
    <form action="form.php" method="GET">
        Name: <input type="text" name="username"/>
        <br>
        <br>
        Age: <input type="number" name="age"/>
        <br>
        <input type="submit">
     </form>
     <br>
   Your Name is <?php 
    if(isset($_GET["username"])){
        echo $_GET["username"];
    } ?>    
    <br>
    Your age is <?php 
    if(isset($_GET["age"])){
        echo $_GET["age"];
    } ?>
</body>
</html>