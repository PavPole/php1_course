<html>
<head>
</head>
<body>
<?php
$images = scandir('img');
foreach ($images as $img) {
    if(is_file('img/'.$img)){

?>

<a href='/img/<?php echo $img; ?>' target='_blank'>
    <img src='/img/<?php echo $img; ?>' style='width:12%'>
</a> 

<?php
    }
}
?>
</body>

</html>