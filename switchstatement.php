<?php 
$title = "Switch Statements";
include 'Includes/header.php'
?>

    <h1>Switch Statements</h1>

    <?php
        $grade = 'A';

        switch($grade)
        {
            case 'A':
                echo '<h2 style="color: green">You are a superstar!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: blue">You did well</h2>';
                break;
            default:
                echo '<h2 style="color: red">You have failed!....</h2>';
                break;
        }

    ?>
 <?php require 'includes/footer.php' ?>