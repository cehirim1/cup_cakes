<?php
//define a constant price for each cupcake
define(CUPCAKE_COST, 3.50);

//set the flavors & name values
$flavors = "";
$name = "";

//flag variable
$isChecked = true;

if (empty($_POST['name'])){
    $isChecked = false;
    echo "Please enter your name.<br>";
}
else{
    $name = $_POST['name'];
}

if (empty($_POST['flavors'])){
    $isChecked = false;
    echo "Please select some flavor(s).";
}

else{
    $flavors = $_POST['flavors'];
}

if($isChecked){
    //define and initialize price
    $price = 0.0;

    //count the number of flavors selected by user
    $countFlavors = sizeof($_POST['flavors']);

//get the total price of flavors
    $price += $countFlavors*CUPCAKE_COST;


//format price to 2 decimal places
    $price = number_format($price, 2);

echo "<br><p>Thank you, $name, for your order!</p>";
echo "<p>Order Summary:</p>";

//src StackOverFlow
//https://stackoverflow.com/questions/14814393/output-php-array-into-unordered-list
echo "<ul>";
echo "<li>" . implode( "</li><li>", $flavors) . "</li>";
echo "</ul>";
//src ends
echo"<p>Order Total:</p>";
echo "<p>$$price</p>";
}





