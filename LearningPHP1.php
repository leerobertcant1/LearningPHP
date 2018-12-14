<!DOCTYPE html>
<html>
<body>

<?php
    define("LineBreak", "<br>");
    $testOne = new Learn1TestOne();
    $testTwo = new Learn1TestTwo();
    $testThree = new Learn1TestThree(LineBreak);

    echo $testOne->getInterpolatedString();
    echo $testTwo->PropertyOne;
    echo $testThree->getPassedData();

    class Learn1TestOne{
        public function getInterpolatedString(){
            $counter = 1+1;
            $newline = "<br>";

            return "Class One string interpolation:  ${newline} ${counter} ${newline}";
        }
    }

    class Learn1TestTwo{
        public $PropertyOne = "Class Two property";
    }

    class Learn1TestThree{
        public $_lineBreak;

        public function __construct($lineBreak)
        {
            $this->_lineBreak = $lineBreak;
        }

        public function getPassedData(){
            return $this->_lineBreak;
        }
    }
?>

</body>
</html>