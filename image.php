<?php
//вывод в браузере
require 'db.php';
$res=mysqli_query($connection,"SELECT `image` FROM `tovar`");
$image = mysqli_fetch_array($res);
header("Content-type: image/jpeg");
echo $image['image'];
?>