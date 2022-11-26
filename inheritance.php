<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php 
        class Chef{
            function makeChicken(){
                echo "murgi banao <br>";
            }

            function makeSalad(){
                echo "salad banao <br>";
            }
            function makeSpecialDish(){
                echo "dish banao <br>";
            }
        }
        class InheritanceChef extends Chef{
            function makeTea(){
                echo "cha banao <br>";
            }
            function makeSalad(){
                echo "lobon na dia salad banao <br>";
            }
        }
        $chef = new Chef();
        $chef -> makeChicken();
        $inheritanceChef = new InheritanceChef();
        $inheritanceChef -> makeSpecialDish();
        $inheritanceChef -> makeTea();
        $inheritanceChef -> makeSalad();
    ?>
</body>
</html>