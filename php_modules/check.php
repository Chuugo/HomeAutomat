<?php
include("sqlconnect.php");
function check($n){
    if($n < 7 and $n > 0){
        global $conn;
        $sql = ("select onoff from button where id = $n;");
        $test = $conn->query($sql);
        if($test->fetch_assoc()["onoff"] == 1){
            echo "on";
        }
        elseif ($test->fetch_assoc()["onoff"] == 0) {
            echo "off";
        }
    }else{
        echo ("there is no value with this id");
    }
    
}
?>