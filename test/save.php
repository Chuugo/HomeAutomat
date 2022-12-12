<?php
        //catlakozas a szerverhez
        $csatl = new mysqli("localhost" , "diak" , "123", "pataky");
        if ($csatl -> connect_errno)
        {
        echo "nem sikerult csatlakozni a szerverhez (".$csatl -> connect_errno.")";
        exit    //befejezzuk a szervermuveleteket
        }


        //adatok lekerdezese
        $leker = "insert into tanulo (veznev, kernev, irszam ) values (' . &_REQUEST['veznev'] .',' . &_REQUEST['kernev']. ',' . &_REQUEST['irszam'] . ');";
        //echo $leker

        if (!($valasz = $cscatl -> query( $leker )))
        {
        $valasz -> free_result();
        }
        //csatlakozas zarasa
        mysqli_close($csatl)
        //adatok megjelenitese
        ?>