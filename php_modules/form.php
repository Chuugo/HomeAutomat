<form action="interact.php" method="post">
    <input type="text" name="name"><br>
    Samsung: <input type="checkbox" name="mobiles[]" value="Samsung"><br>
    Apple: <input type="checkbox" name="mobiles[]" value="Apple"><br>
    Xiaomi: <input type="checkbox" name="mobiles[]" value="Xiaomi"><br>
    <input type="submit">
</form>
<?php
    $submittedname = $_POST["name"];
    echo ("Your name is; $submittedname <br>");
    $mobiles = $_POST["mobiles"];
    for ($i=0; $i < count($mobiles) ; $i++) { 
        echo ("You choose $mobiles[$i] <br>");    
    }
    
?>