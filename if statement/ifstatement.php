<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <?php
        echo "<h2>If Statement :-</h2>";

        $grade = 25;
        echo "You have scored $grade marks in exam.";

        if($grade >= 50){
             echo "<h3 style = 'color:green'>YOU HAVE PASSED.</h3>";
        }
        else{
            echo "<h3 style = 'color:red'>YOU HAVE FAILED.</h3>";
        }

        echo "<h2>Else-If Statement :-</h2>";

        $grade = "A";
        echo "You have achieved $grade grade in exam.";

        if($grade = "A"){
            echo "<h3 style = 'color:green'>YOU ARE SUPERSTAR!!!</h3>";
        }
        elseif($grade = "B"){
            echo "<h3 style='color:green'>YOU DID WELL!!!</h3>";
        }
        else{
            echo "<h3 style='color:red'>YOU ARE FAILED...</h3>";
        } 
    ?>
    
</body>
</html>