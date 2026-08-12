<?php
include("conn.php");

$result = mysqli_query($conn, "SELECT * FROM contact");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>

    <style>
        table{
            width:100%;
            border-collapse:collapse;
        }

        table,th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            padding:6px 10px;
            color:white;
            background:red;
            border-radius:5px;
        }
    </style>
</head>
<body>

<h2>Contact Messages</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
    <th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['member_name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>

<td>
<a href="deleteContact.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this message?');">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>

</body>
</html>