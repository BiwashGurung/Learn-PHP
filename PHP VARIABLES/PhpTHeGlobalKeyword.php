<!DOCTYPE html>
<html>
<body>

<?php
/*The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function): */
$x = 12;
$y = 11;

function test(){
    global $x , $y;
    $y = $x + $y;
}
test();
echo $y;


?>

</body>
</html>