<?php 
    $title = "Functions";
    include 'Includes/header.php'
?>
    <h1>Funtions</h1>

    <?php

        function writeMessage()
        {
            echo "You are really a nice person, Have a nice time <br/>";
        }

        writeMessage();
        echo "<hr/>";
        writeMessage();

        $num = 500;

        function addFunction($num1, $num2)
        {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";
        }

        function returnProduct($num1, $num2)
        {
            $prod = $num1 * $num2;
            return $prod;
        }

        function changeNum($num)
        {
            $num = $num + 10;
        }

        addFunction(10, 20);

        changeNum($num);
        echo $num. '<br/>';
        $return_value = returnProduct(10, 200);
        echo $return_value. '<br/>';
    ?>
 <?php require 'includes/footer.php' ?>