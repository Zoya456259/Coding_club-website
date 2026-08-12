<?php

include("conn.php");

$id = $_GET['id'];

$sql = "DELETE FROM contact WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location:listContact.php");
    exit();
}
else
{
    echo mysqli_error($conn);
}

?>