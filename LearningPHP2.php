<!DOCTYPE html>
<html>
<body>

<?php
    $classOne = new Learn2TestOne();
    $classTwo = new Learn2TestTwo();
    $classThree = new Learn2TestThree();

    echo $classOne->getValue();
    echo $classTwo->getSwitchedValue();
    echo $classThree->writeLoops(3);

    class Learn2TestOne{
        function getValue(){
            $value = "value";

            if(strlen($value) > 5){
                return "Greater than 5 characters" . "<br>";
            }
            else{
                return "Less than 5 characters" . "<br>";
            }
        }
    }

    class Learn2TestTwo{
        function getSwitchedValue(){
            $bool = true;

            switch($bool){
                case false:
                    return "False" . "<br>";
                default:
                    return "True" . "<br>";
            }
        }
    }

    class Learn2TestThree{
        function writeLoops($total){
            for ($i = 0; $i < $total; $i++){
                $i += $total;
            }

            return $total;
        }
    }
?>
</body>
</html>