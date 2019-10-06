<?php 
    $title = "Arrays";
    include 'Includes/header.php'
?>

    <h1>Arrays</h1>

    <?php
        $num = 3;

        $numbers = array(1,2,3,4,5,6,7,8,9,101,2,65);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array numbers is size: $size </p>";

        for($count = 0; $count < $size; $count++)
        {
            echo "<p>$numbers[$count]</p>";
        }
    ?>
 <?php require 'includes/footer.php' ?>