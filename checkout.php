<?php
session_start();

$_SESSION['shoppingCart'] = array("milk", "potatos", "waffles", "table", "Derek");

function displayItems(){
    foreach($_SESSION['shoppingCart'] as $elements){
        echo "<div>";
        echo $elements;
        echo "</div>";
        echo "<br>";
        
    }
}



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Checkout Page </title>
    </head>
    <body>
        <div>
            <h1>Checkout Items</h1>
            <?=displayItems()?>
        </div>

    </body>
</html>