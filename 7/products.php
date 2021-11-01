<?php
$link= mysqli_connect('localhost', 'root', '1234', '5');
if(isset($_GET['action']) && $_GET['action']=="add"){

    $id=intval($_GET['id']);

    if(isset($_SESSION['cart'][$id])){

        $_SESSION['cart'][$id]['quantity']++;

    }else{

        $sql_s= "SELECT * FROM products 
				WHERE id=" . $id;
        $query_s=mysqli_query($link,query:$sql_s);
        if(mysqli_num_rows($query_s)!=0){
            $row_s=mysqli_fetch_array($query_s);

            $_SESSION['cart'][$row_s['id']]=array(
                "quantity" => 1,
                "price" => $row_s['price']
            );


        }else{

            $message="This product id it's invalid!";

        }

    }

}

?>
<h1>Product List</h1>
<?php
if(isset($message)){
    echo "<h2>$message</h2>";
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <?php

    $sql="SELECT * FROM products ORDER BY name";
    $query=mysqli_query($link,query:$sql);

    while ($row=mysqli_fetch_array($query)) {

        ?>
        <tr>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['desc'] ?></td>
            <td><?php echo $row['price'] ?>$</td>
            <td><a href="index.php?page=products&action=add&id=<?php echo $row['id'] ?>">Add to cart</a></td>
        </tr>
        <?php

    }

    ?>

</table>