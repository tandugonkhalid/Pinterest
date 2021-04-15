<?php

include("../dbcon/dbcon.php");

if(isset($_POST['submit'])&&isset($_FILES['image'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    

    $query = "INSERT INTO products (product_desc, product_price, image_file, user_id) VALUES('$name', '$price', '$imagename','1')";

    if(!$conn){
        die("Connection Failed: ".mysqli_connect_error());
    }

    if(mysqli_query($conn, $query)){
        header("location: ../admin/admin.php");
        exit();
    }else{
        echo "Error: ".mysqli_error($conn);
    }

    
} 