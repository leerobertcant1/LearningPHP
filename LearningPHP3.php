<!DOCTYPE html>
<html>
<body>

<?php

    $classOne = new Learn3TestOne();
    $GLOBALS['globalVar'] = "Global var";

    echo $classOne->sortArrayValue();
    echo $classOne->sortAssociativeArrayValue();
    echo $classOne->getGlobalVar();


    class Learn3TestOne{
        function sortArrayValue(){
            $me = array('Lee', "Robert",
                "Cant");
            sort($me);

            return $me[0] . "<br>";
        }

        function sortAssociativeArrayValue(){
            $aMe = array('Fname'=>'Lee','Mname'=> "Robert",
                'LName'=>"Cant");
            asort($aMe);

            return $aMe['Fname'] . "<br>";
        }

        function getGlobalVar(){
            return $GLOBALS['globalVar'];
        }
    }

?>
</body>
</html>