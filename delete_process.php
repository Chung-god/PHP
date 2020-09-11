<?php
unlink('Data/'.basename($_POST['id'])); //'.Data/' 작동안함
header('Location: /index.php');
?>