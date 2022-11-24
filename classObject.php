<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes and Objects</title>
</head>
<body>
    <?php
        class Book {
           var $title; 
           var $author;
           var $pages;
        //    constructors
                // function __construct(){
                //     echo "new book created<br>";
                // }
            function __construct($aTitle, $aAuthor, $aPages ){
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;

            }
        }
        $book1 = new Book ("Sajid", "Arif", 400);
        echo $book1->author;
        echo "<hr>";
        $book2 = new Book ("Double", "Shakti", 300);
        echo $book2->author;

        // $book1 = new Book("Nabil");
        // $book1->title= "Paradoxical";
        // $book1->author= "Arif";
        // $book1->pages = 300;

        // echo $book1->author;
        echo "<hr>";
        // $book2 = new Book("Mizan");
        // $book2 -> title = "Double Standard";
        // $book2 -> author =" shakti";
        // $book2 -> pages = 400;
        // echo $book2->title;
    ?>

    <?php
        class Student {
            var $name;
            var $class;
            var $subject;
            var $gpa;
            
            function __construct($aName, $aClass, $aSubject, $aGpa){
                $this->name = $aName;
                $this->class = $aClass;
                $this->subject = $aSubject;
                $this->gpa = $aGpa;
            }

            function hasHonors(){
                if($this->gpa>=3){
                    return "true";
                }
                 return "false";
            }
        }
        $student1= new Student ("Nabil", 10, "Science", 3);
        $student2= new Student ("Rahim", 10, "Science", 1);
        $student1->name = "Radif";
        echo $student1->name;
        echo "<hr>";
        echo $student2->name;
        echo "<hr>";
        echo $student1->hasHonors();
        echo "<hr>";
        echo $student2->hasHonors();
    ?>
</body>
</html>