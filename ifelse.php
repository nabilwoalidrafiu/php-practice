<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else</title>
</head>
<body>
    <?php
    
     //1st practice
        $isMale = true;
        $isShort = false;
        if($isMale && $isShort){
            echo "Male and Short";
        }else if ($isMale && !$isShort){
            echo "Male but not short";
        }else if (!$isMale && $isShort){
            echo "Not Male but short";
        }else if (!$isMale && !$isShort){
            echo "Tall Female";
        };
        // 2nd practice
       
    ?>
</body>
</html>