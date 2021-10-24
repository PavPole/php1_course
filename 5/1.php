<?php
$link= mysqli_connect('localhost', 'root', '1234', '5');
$result = mysqli_query($link,"select * from images where 1 order by viewed desc");
while ($row = mysqli_fetch_assoc($result))
{

    echo '<a href= "show_images.php?images_id='.$row['id']. '">';
    echo '<img width="200" height="50" src =" '.$row['image_path'].'">';
    echo '</a>';
}


