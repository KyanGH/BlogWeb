<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Edit user accounts</h3>
    <form action="includes/userupdate.inc.php" method="post">
    <input type="text" name="user_name" placeholder="User name">
    <input type="text" name="first_name" placeholder="First name">
    <input type="text" name="last_name" placeholder="Last name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="phone_number" placeholder="Phone number">
    <button>Update</button>
</form>

<h3>Delete user accounts</h3>
    <form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="user_name" placeholder="User name">
    <input type="password" name="password" placeholder="Password">
    <button>Delete</button>
</form>
<br><br>


<?php
$j = 5;
echo "<table border='1'>";
//Create columns
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Username</th>";
echo "<th>First name</th>";
echo "<th>Last name</th>";
echo "<th>Password</th>";
echo "<th>Email</th>";
echo "<th>Phone number</th>";
echo "<th>Created at</th>";
echo "</tr>";

// Create rows for each column
for ($row = 1; $row <= $j; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        echo "<td>Row $row, Column $col</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>