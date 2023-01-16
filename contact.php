<?php

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "contact";

$conn = mysqli_connect($servername, $username, $password, $database_name);

if(!$conn)
{
    die("connection failed:" . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email_Address = $_POST['Email_Address'];
    $Phone_Number = $_POST['Phone_Number'];
    $Message_Content = $_POST['Message_Content'];

    $sql_query = "INSERT INTO contact_info (First_Name, Last_Name, Email_Address, Phone_Number, Message_Content)
    Values ('$First_Name', '$Last_Name', '$Email_Address', '$Phone_Number', '$Message_Content')";

    if(mysqli_query($conn, $sql_query))
    {
        echo "Your feedback is very much appreciated, our team will contact you shortly! ";
    }
    else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>