<?php

include("conn.php");

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$university = $_POST['university'];
$year = $_POST['year'];
$language = $_POST['language'];
$competition_type = $_POST['competition_type'];
$message = $_POST['message'];

$sql = "UPDATE event_registration SET

fullname='$fullname',
email='$email',
phone='$phone',
university='$university',
year='$year',
language='$language',
competition_type='$competition_type',
message='$message'

WHERE id=$id";

if(mysqli_query($conn, $sql))
{
    header("Location:listRegistration.php");
    exit();
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>