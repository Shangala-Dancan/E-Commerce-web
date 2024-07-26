<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
    $image=$_FILES['image']['name'];

    $target_dir="uploads/";
    $target_file=$target_dir.basename($image);
    move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);

    $sql="INSERT INTO product(name,price,description,image)VALUES('$name','$price','$description','$target_file')";

    if($conn->query($sql)===TRUE){
        echo "Added";
        header("location: admin.php");
        exit();

    }
    else{
        echo "Error:".$sql."<br>".$conn->error;
    }
    $conn->close();
}

?>