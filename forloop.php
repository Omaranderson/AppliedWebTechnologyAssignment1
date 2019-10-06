<?php 
    $title = "For Loop";
    include 'Includes/header.php'
?>

<h1>For Loop</h1>

<?php
    for($count = 0; $count < 10; $count++)
    {
        echo '<p>Hello world</p>';
    }

    for($count = 0; $count < 10; $count++)
    {
        echo "<p>The count is: $count</p>"; 
    }
?>
 <?php require 'includes/footer.php' ?>