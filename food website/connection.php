<?php

$conn = mysqli_connect("localhost", "root", "", "order");

if(!$conn)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

    @$name =$_POST['name'];
    @$email =$_POST['email'];
    @$number = $_POST['number'];
    @$foodname = $_POST['foodname'];
    @$address = $_POST['address'];



    $sql = "INSERT INTO order_form (name, email, number, foodname, address) VALUES ('$name', '$email', '$number', '$foodname', '$address')";

    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    mysqli_close($conn);
?>