<?php

include("conn.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM event_registration WHERE id=$id";

    if(mysqli_query($conn, $sql))
    {
        header("Location:listRegistration.php");
        exit();
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

?>