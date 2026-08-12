<?php

include("conn.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM event_registration WHERE id=$id");

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Registration</title>
</head>
<body>

<h2>Edit Registration</h2>

<form action="updateRegistration.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<label>Full Name</label><br>
<input type="text" name="fullname" value="<?php echo $row['fullname']; ?>"><br><br>

<label>Email</label><br>
<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

<label>Phone</label><br>
<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br><br>

<label>University</label><br>
<input type="text" name="university" value="<?php echo $row['university']; ?>"><br><br>

<label>Year</label><br>
<input type="text" name="year" value="<?php echo $row['year']; ?>"><br><br>

<label>Programming Language</label><br>
<input type="text" name="language" value="<?php echo $row['language']; ?>"><br><br>

<label>Competition Type</label><br>

<input type="radio" name="competition_type" value="solo"
<?php if($row['competition_type']=="solo") echo "checked"; ?>> Solo

<input type="radio" name="competition_type" value="team"
<?php if($row['competition_type']=="team") echo "checked"; ?>> Team

<br><br>

<label>Message</label><br>

<textarea name="message"><?php echo $row['message']; ?></textarea>

<br><br>

<input type="submit" value="Update Registration">

</form>

</body>
</html>