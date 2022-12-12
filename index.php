<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/switch.css">
    <script src="learn.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Center</title>
</head>
<body>
<?php 
include("php_modules/check.php");
include("php_modules/buttons.php");
?>

<form method="post" >
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
This Relay state is: <?php check(1);echo "<br>";?>
        <input type="submit" name="button2"
        class="button" value="Button2" />
This Relay state is: <?php check(2);echo "<br>"; ?>
        <input type="submit" name="button3"
        class="button" value="Button3" /> 
This Relay state is: <?php check(3);echo "<br>"; ?>
        <input type="submit" name="button4"
        class="button" value="Button4" />
This Relay state is: <?php check(4);echo "<br>"; ?>
        <input type="submit" name="button5"
        class="button" value="Button5" /> 
This Relay state is: <?php check(5);echo "<br>"; ?>
        <input type="submit" name="button6"
        class="button" value="Button6" />
This Relay state is: <?php check(6);echo "<br>"; ?>
        <label class="switch">
        <input type="checkbox" onchange="this.form.submit">
        <span class="slider"></span>
        </label>
    
</body>
<?php include "html_modules/footer.html" ?>

</html>


    