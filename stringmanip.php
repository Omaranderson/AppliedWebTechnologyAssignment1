<?php 
    $title = "String Manipulation";
    include 'Includes/header.php'
?>

    <?php
        $phrase1 = "Student who came late";
        $phrase2 = "In class, stand with rock";
        $name = "omar anderson";

        echo $phrase1. " " . $phrase2;
        echo 'br/>';
        echo '<hr/>';

        echo'Uppercase first letter : '.ucfirst($name).'<br/>';
        echo'Uppercase first letter of each word: '.ucwords($name).'<br/>';
        echo'Upper case : '. strtoupper($name).'<br/>';
        echo'Upper case : '. strtolower($name).'<br/>';

        echo '<hr/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a', 10)) . '<br/>';
        echo 'Repeat String: ' . str_repeat('a', 10) . '<br/>';
        echo 'get a Substring: ' . substr($name, 5, 10).'<br/>';

        echo 'get position of string: ' .strpos($name,'a').'<br/>';
        
        echo 'Find Character "R": ' .strchr($name, 'R').'<br/>';
        echo 'Find Character "r": ' .strchr($name, 'r').'<br/>';
        echo 'Find Character "s": ' .strchr($name, 's').'<br/>';
        echo 'Find Character "e": ' .strchr($name, 'e').'<br/>';

        echo 'Find length of String: ' . strlen($name) .'<br/>';

        echo 'Without Trim: ' . "A" . "B C D" . "E" . '<br/>';
        echo 'Trim spaces to both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

        echo 'Replace string with another: '. str_replace("Stand", "Sit", $phrase2) . '<br/>';


    ?>
 <?php require 'includes/footer.php' ?>