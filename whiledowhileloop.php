<?php 
    $title = "While Loop";
    include 'Includes/header.php'
?>

    <h1>While Loop</h1>

    <?php
        $grade = 0;

        //while($grade < 10)
        //{
            //echo '<p>I am less than 10</p>';
        //}

        while($grade < 10)
        {
            echo '<p>I am less than 10</p>';
            $grade++;
        }

        echo'exit Loop';
    ?>

    <h1>Do-While Loop</h1>
    <?php
        $grade = 0;
        do
        {
            echo'<p>I am do while loop</p>';
            $grade++;
        }while($grade < 10);
        echo'exit Loop';
    ?>
 <?php require 'includes/footer.php' ?>