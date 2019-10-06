<?php 
    $title = "if Statements";
    include 'Includes/header.php'
?>

    <?php
        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 50)
        {
            echo '<h3 style="color: green">You have passed</h3>';
        }
        else
        {
            echo '<h3 style="color: red">You have failed</h3>';
        }

        $grade = 'A';
        if ($grade == 'A')
            echo '<h2 style="color: green">You are a superstar!</h2>';
        else if ($grade == 'B')
            echo '<h2 style="color: blue">You did well</h2>';
        else
            echo '<h2 style="color: red">You have failed!....</h2>';
    ?>
  <?php require 'includes/footer.php' ?>