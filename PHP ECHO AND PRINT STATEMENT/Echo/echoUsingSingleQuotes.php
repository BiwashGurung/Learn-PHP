<!DOCTYPE html>
<html>
    <body>
        <h3>Using Single Quotes</h3>
        <p>Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.

When using double quotes, variables can be inserted to the string as in the example above.

When using single quotes, variables have to be inserted using the . operator, like this:</p>
        <?php
           $name = "Muna";
           $caste = "Pun";
           $description = "Hello I am $name and I am from lekhnath";

           echo '<h2>'. 'About ' . $name , $caste .'</h2>' ;
           echo 'Description : ' . $description;

       ?> 
    </body>
</html>
