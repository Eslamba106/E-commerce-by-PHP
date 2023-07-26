<?php
include('config.php');

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE =$_POST['price'];
    $IMAGE =$_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = 'src/'.$image_name;
    $insert = "INSERT INTO prod (name , price , image )VALUES ('$NAME' , '$PRICE' , 'image-up')";
    mysqli_query($conn , $insert);
    if(move_uploaded_file($image_location , 'src/'.$image_name)){
        echo "<script>alert('The Product Uploaded')</script>";
    }else{
        echo "<script>alert('Error')</script>";
    }
    header('location:index.php');


}   