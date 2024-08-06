<!DOCTYPE Html>
<html>
    <body>
        <?php
        $color = "red";
        $food = "momo";
        //In PHP, the . operator is used for string concatenation. This means it combines two or more strings into a single string.
        echo"my fav color is " . $color . "<br>";
        echo "my fav food is " . $food . " and my fav color is " . $color . "<br>";
        echo"$food $color ";
        /*
        To summarize, the . operator concatenates strings and variables. It’s important to ensure that variable names are used correctly and consistently because PHP is case-sensitive.

        
        The use of . for concatenation in the first two echo statements and the direct variable interpolation in the third echo statement are both valid ways to include variable values within strings in PHP.
         */
        ?>
    </body>
</html>