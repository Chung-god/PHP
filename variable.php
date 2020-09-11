<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = "Hyun Chung";
        echo "In the example above, notice that we did not have to tell PHP which data type the variable is.".$name."

PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added. ".$name."This gives an option to specify the data type expected when declaring a function, and by enabling the strict requirement, it will throw a \"Fatal Error\" on a type mismatch.

You will learn more about strict and non-strict requirements, and data type declarations in the PHP Functions chapter.".$name;
    
    ?>   
</body>
</html>