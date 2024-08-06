<!DOCTYPE html>
<html>
<body>
<h1>A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:</h1>
<p>Example<br>
    Variable with local scope:</p>
<?php
/*You can have local variables with the same name in different functions,
 because local variables are only recognized by the function in which they are declared. */
function localScope(){
    $x=1111;
    // variable ra local scope use gareko
    echo"This is inside a local scope $x";
}
localScope();
//function vitra ko variable lai call garda error aaunca ki natra value dekhaudaina . based on your system
echo"This is outside a local scope $x";

?>
</body>
</html>