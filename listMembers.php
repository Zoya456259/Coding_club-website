<?php
include("conn.php");

$result = mysqli_query($conn, "SELECT * FROM members");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Members List</title>

    <style>
        table{
            border-collapse:collapse;
            width:100%;
        }

        table,th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }

        a{
            text-decoration:none;
            padding:6px 10px;
            background:#0d6efd;
            color:white;
            border-radius:4px;
        }

        .delete{
            background:red;
        }
    </style>

</head>

<body>

<h2>Membership List</h2>

<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Year</th>
    <th>Skills</th>
    <th>Resume</th>
    <th>Action</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['member_name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['year_program']; ?></td>

<td><?php echo $row['skills']; ?></td>

<td>

<?php

if($row['resume']!="")
{
?>
<a href="uploads/<?php echo $row['resume']; ?>" target="_blank">
View Resume
</a>

<?php
}
else
{
echo "No Resume";
}
?>

</td>

<td>

<a href="editMember.php?id=<?php echo $row['id']; ?>">
Edit
</a>

<a class="delete"
href="deleteMember.php?id=<?php echo $row['id']; ?>">
Delete
</a>

</td>

</tr>

<?php

}

?>

</table>

</body>

</html>