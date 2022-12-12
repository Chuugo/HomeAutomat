<?php
    class Pc{
        var $cpu;
        var $memory;
        var $storage;

        function __construct($acpu, $amemory, $astorage){
           $this->cpu = $acpu;
           $this->memory = $amemory;
           $this->storage = $astorage;
           echo "Its working <br>";
        }

        function moreram(){
            if($this->memory <= 16){
                return ("I guess it will be capable of running windows");
            }
        return ("Stay with Linux");
        }
    }
    $pc1 = new Pc("Intel",16,"ssd");
    $pc2 = new Pc("AMD",8,"nvme");

    echo $pc1->memory;
    echo $pc1->moreram();
    
?>