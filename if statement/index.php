<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Index</title>
</head>
<body>
    <!-- Basic HTML -->
    <h1>Hello World - PHP primer</h1>

    <h2>Follow each link to page examples.</h2>
    <ul>
        <li><a href="array.php">Simple Array and Printouts.</a></li>
        <li><a href="forloop.php">Simple For Loop.</a></li>
        <li><a href="dowhileloop.php">Simple Do While.</a></li>
        <li><a href="whileloop.php">Simple While Loop</a></li>
        <li><a href="ifstatement.php">Simple If Statement.</a></li>
        <li><a href="switchstatement.php">Simple Switch Statement.</a></li>
    </ul>

    <?php
        // Printing HTML in PHP using echo 
        echo 'Hello PHP';
        echo '<br>';
        echo 'Welcome';
        echo '<br>';
    ?>

    <?php
        // Declare variables
        $name = 'Pravin';
        $age = 21;

        // echo variables
        echo $name;
        echo '<h1>My name is '.$name.'.</h1>';
        // echo using double quotation marks
        echo "<h1>My age is $age years.</h1>";
    ?>
    
</body>
</html>