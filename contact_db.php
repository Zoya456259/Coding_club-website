<?php

include("conn.php");

if(isset($_POST['member_name']))
{
    $member_name = $_POST['member_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact
    (member_name,email,subject,message)
    VALUES
    ('$member_name','$email','$subject','$message')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Message Sent Successfully!');
        window.location='contact.php';
        </script>";
    }
    else
    {
        echo "Error : " . mysqli_error($conn);
    }
}

?>