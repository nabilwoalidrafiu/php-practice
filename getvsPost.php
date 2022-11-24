<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get vs Post</title>
</head>
<body>
    <form action="getvsPost.php" method="post">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <?php 
        if(isset($_POST["password"])){
            echo $_POST["password"];
        }
    ?>
</body>
</html>