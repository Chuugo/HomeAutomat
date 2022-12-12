<?php
for ($i=1; $i < 7; $i++) { 
    if(array_key_exists("button$i", $_POST)) {
        button($i);
        }
}

    function button($bn) {
        include("sqlconnect.php");
        $select = ("select onoff from button where id = $bn;");
        $test = $conn->query($select);
        if ($test->fetch_assoc()["onoff"] == 1) {
            global $back;
            $back = 0;
        } elseif ($test->fetch_assoc()["onoff"] == 0) {
            global $back;
            $back = 1;
        }
        
        $update = ("update button set onoff=$back where id=$bn;");
        if($conn->query($update) == true){
            //echo ("Updated successfully");
        }else{
            echo ("Not so good dude");
        }
        $conn->close();
    }
    /*
        b1 = Main Realay
        b2 = Main Light Realy
        b3 = Light 1
        b4 = Light 2
        b5 = k1
        b6 = k2
    */
    
?>