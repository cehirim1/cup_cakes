<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img.png">

</head>
<body>
<h1> Cupcake Fundraiser</h1>
<div>
    <form id="myForm" action="process.php" method="post">
        <p> Your name:</p>
        <label><input type = "text" placeholder="Please input your name"></label>

        <p> <strong>Cupcake flavors:</strong></p>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="The Grasshopper">The Grasshopper</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Whiskey Maple Bacon">Whiskey Maple Bacon</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Carrot Walnut">Carrot Walnut</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Salted Caramel Cupcake">Salted Caramel Cupcake</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Red Velvet">Red Velvet</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Lemon Drop">Lemon Drop</label>
        </div>
        <div class="form-check">
            <label class='form-check-label'><input type='checkbox' name='flavors[]' value="Tiramisu">Tiramisu</label>
        </div>


        <br><button class="btn btn secondary" type="submit" value="Order" name="button">Order</button>

    </form>
    <script src="script.js"></script>
</body>
</html>
