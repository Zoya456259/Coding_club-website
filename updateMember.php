<?php

include("conn.php");

$id=$_POST['id'];

$name=$_POST['member_name'];

$email=$_POST['email'];

$year=$_POST['year_program'];

$skills=$_POST['skills'];

$sql="UPDATE members
SET

member_name='$name',

email='$email',

year_program='$year',

skills='$skills'

WHERE id=$id";

if(mysqli_query($conn,$sql))
{
    header("Location:listMembers.php");
    exit();
}
else
{
    echo mysqli_error($conn);
}

?>