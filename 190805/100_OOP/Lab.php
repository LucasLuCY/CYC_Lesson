<?php
    print_r("Start<br>");
    $obj = new CAnimal(-15);
    $obj->makeNoise();
    // $obj->weight = 100;

    // echo $obj->weight;
    $obj->getWeight();
 
    $obj2 = new CDog(5, "usa");
    $obj2->makeNoise();

    class CAnimal {
        private $weight = 1;
        
        function __construct($_weightValue = 0){
            echo "Object Created.<br>";
            if($_weightValue > 0){
                $this->setWeight($_weightValue);
            }else{
                echo "Your weight information is wrong!!!<br>";
            }
        }

        public function makeNoise(){
            echo "Animal:.......<br>";
        }

        public function setWeight($_weightValue){
            $this->weight = $_weightValue;
        }

        public function getWeight(){
            echo $this->weight . "<br>";
        }

        function __destruct(){
            echo "Object destroyed<br>";
        }
    }

    class CDog extends CAnimal{
        public $Location;

        public function __construct($_weightValue = 20, $_loc = "unknown"){
            parent::__construct($_weightValue);
            $this->Location = $_loc;
        }

        public function makeNoise(){
            echo "Dog: Wan! Wan!<br>";
        }
    }