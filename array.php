<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Array</h>
    <?php
        $coworkers = array('chung','park');
        echo $coworkers[0].'<br>';
        var_dump(count($coworkers));
        array_push($coworkers,'mom');
        var_dump($coworkers); 
    ?>
</body>
</html>