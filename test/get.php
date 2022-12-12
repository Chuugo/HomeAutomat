<html>
<head>
<title>php get </title>
</head>



<body>
        <?php
        //catlakozas a szerverhez
        $csatl = new mysqli("localhost" , "honlap" , "123", "13b");
        if ($csatl -> connect_errno)
        {
        echo "nem sikerult csatlakozni a szerverhez (".$csatl -> connect_errno.")";
        exit    //befejezzuk a szervermuveleteket
        }


        //adatok lekerdezese
        $leker = "SELECT * from tanulo;";
        $valasz = $cscatl -> query( $leker );
        if ($valasz )
        {
        echo $valasz -> num_rows;
        while ( $sor = mysqli_fetch_assoc($valasz)){
        echo $sor['veznev'] . "<br />" . $sor['kernev'] . "<br />" . $sor['id'] "<br / >";
        }
        $valasz -> free_result();
        } 
        //csatlakozas zarasa
        mysqli_close($csatl)
        //adatok megjelenitese
        ?>
</body>
</html>
