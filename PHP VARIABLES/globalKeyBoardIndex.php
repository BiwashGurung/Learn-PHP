<?php
/*
PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.

The example above can be rewritten like this:
*/
$x = 5555555555555551;//global scope
$y = 23523524352;//global scope

function myTest(){
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo $y;// outputs 3 
/* 
yeha chai k va vanda fuction baira ko variable declare lai chai global scope vanxa jaslai hami la directly access garnu paudaina
tesaila garda hami lai myTest() function ma chai global scope use garnu parni theyo tesaila garda hami la $GLOBALS['index'] array use garyo
jasla garda chai hami la global variable ko access paryo  tespachi simple logic use garyo i.e sum and pachi echo garera print garyo the actual sum
*/
?> 
