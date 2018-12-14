<!DOCTYPE html>
<html>
<body>

<form method="get">
    Name: <input type="text" name="name"><br>
    <input type="submit">
</form>


<?php

$classOne = new Learning4TestOne();
echo $classOne->getName();

class Learning4TestOne{
    function getName(){
        return $_GET["name"];
    }
}
?>
</body>
</html>