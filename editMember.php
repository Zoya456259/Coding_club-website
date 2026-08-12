<?php

include("conn.php");

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM members WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
</head>
<body>

<h2>Edit Member</h2>

<form action="updateMember.php" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Name</label><br>

<input type="text"
name="member_name"
value="<?php echo $row['member_name']; ?>">

<br><br>

<label>Email</label><br>

<input type="email"
name="email"
value="<?php echo $row['email']; ?>">

<br><br>

<label>Year</label><br>

<input type="text"
name="year_program"
value="<?php echo $row['year_program']; ?>">

<br><br>

<label>Skills</label><br>

<textarea name="skills"><?php echo $row['skills']; ?></textarea>

<br><br>

<label>Resume</label><br>

<input type="file" name="resume">

<br><br>

<input type="submit" value="Update">

</form>

</body>
</html>