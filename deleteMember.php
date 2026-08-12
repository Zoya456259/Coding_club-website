<?php

include("conn.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $sql = "DELETE FROM members WHERE id=$id";

    if(mysqli_query($conn,$sql))
    {
        header("Location:listMembers.php");
        exit();
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}

?>