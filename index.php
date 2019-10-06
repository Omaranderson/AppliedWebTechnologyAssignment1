<?php 
    $title = "Index";
    include 'Includes/header.php'
?>
    <h1>Hello World - PHP Primer</h1>
    <br/>
    <?php 
        echo 'Hello PHP';
        echo '<br/>';
        echo '<Second Line';
        echo '<br/>';
    ?>

    <?php 
        $name = 'Omar Anderson';
        $age = 21;
        echo $name;
        echo '<h1>My name is: ' .$name.' </h1>';
        echo '<h1>My age is: ' .$age.' </h1>';

        echo "<h1>My name is: $name </h1>"
    ?>
<button type="button" class="btn btn-dark">Click Me</button>
<?php require 'includes/footer.php' ?>