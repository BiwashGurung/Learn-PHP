<?php
/*
Using Single Quotes
Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:
 */
$txt = "gfg";
$txt2 = "sdgsdgsdg";

print '<h2>'.  $txt . '</h2>';
print 'dfhdhgfghf ' . $txt2 . 'fgsdgsg';

?>