<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String & String Operator</h1>
    <?php
        echo 'Hello \'w\'orld';
    ?>
    <h2>concatenation operator</h2>
    <?php
        echo "Hello "."world"; // + 가 아니라 . , 하나의 문자열로 만들어줌 
    ?>

    <h2>String Length </h2>
    <?php
    echo "문자열 길이 : ". strlen("Hello world");
   ?>
</body>
</html>