<?php

include("conn.php");

if(isset($_POST['fullname']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $university = $_POST['university'];
    $year = $_POST['year'];
    $language = $_POST['language'];
    $competition_type = $_POST['competition_type'];
    $message = $_POST['message'];

    $sql = "INSERT INTO event_registration
    (fullname,email,phone,university,year,language,competition_type,message)
    VALUES
    ('$fullname','$email','$phone','$university','$year','$language','$competition_type','$message')";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
            alert('Registration Successful!');
            window.location='events.php';
        </script>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}

?>