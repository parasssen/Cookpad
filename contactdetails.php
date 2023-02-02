<?php
$server_name="localhost";
$user_name="root";
$password="";
$database_name="portfolio";


$conn=mysqli_connect($server_name, $user_name, $password, $database_name);

if(!$conn)
{
    die("connection failed: " . mysqli_connect_error());
}

if (isset ($_POST['save']))
{
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $enquiry = $_POST['enquiry'];

    $sql_query = "insert into contact (email, name, phone, enquiry) VALUES ('$email', '$name', '$phone', '$enquiry')";

    if (mysqli_query($conn, $sql_query))
    {
        echo "New Details Entery inserted successfullyu !";

    }
    else{
        echo "Error: ". $sql . "" .mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>