<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo"Welcome";
        }
    }
    function print_description(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
            $basename = basename("Data/".$_GET['id']);
            echo htmlspecialchars(file_get_contents("Data/".$basename));
        }else{
            echo "Hello,PHP";
        }
    }

    function print_list(){
        $list = scandir('./Data');
        $i = 2;
        while($i < count($list)){
            $title = htmlspecialchars($list[$i]);
            echo "<li><a href=\"index.php?id=$title\"> $title</a> </li>\n" ;
            $i = $i + 1;
        }
    }
?>