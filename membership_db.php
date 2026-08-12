<?php

include("conn.php");

if(isset($_POST['member_name']))
{
    $member_name = $_POST['member_name'];
    $email = $_POST['email'];
    $year_program = $_POST['year_program'];
    $skills = $_POST['skills'];

    $resume = "";

    // Resume Upload
    if(isset($_FILES['resume']) && $_FILES['resume']['error'] == 0)
    {
        $resume = time() . "_" . $_FILES['resume']['name'];

        move_uploaded_file(
            $_FILES['resume']['tmp_name'],
            "uploads/" . $resume
        );
    }

    $sql = "INSERT INTO members
    (member_name,email,year_program,skills,resume)
    VALUES
    ('$member_name','$email','$year_program','$skills','$resume')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Membership Form Submitted Successfully!');
        window.location='about.php';
        </script>";
    }
    else
    {
        echo "Error : ".mysqli_error($conn);
    }
}

?>