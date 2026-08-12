<?php
include("conn.php");

$result = mysqli_query($conn, "SELECT * FROM event_registration");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Registrations</title>

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
            padding:5px 10px;
            background:blue;
            color:white;
            border-radius:4px;
        }

        .delete{
            background:red;
        }
    </style>
</head>

<body>

<h2>Event Registration List</h2>

<table>

<tr>
    <th>ID</th>
    <th>Full Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>University</th>
    <th>Year</th>
    <th>Language</th>
    <th>Competition</th>
    <th>Message</th>
    <th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['university']; ?></td>
<td><?php echo $row['year']; ?></td>
<td><?php echo $row['language']; ?></td>
<td><?php echo $row['competition_type']; ?></td>
<td><?php echo $row['message']; ?></td>

<td>

<a href="editRegistration.php?id=<?php echo $row['id']; ?>">Edit</a>

<a class="delete"
href="deleteRegistration.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this registration?');">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>