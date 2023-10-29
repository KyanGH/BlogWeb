<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<iframe src="master.php" frameborder="0" width="100%" height="50"></iframe>
    <h3>Edit user accounts</h3>
    <form action="includes/userupdate.inc.php" method="post">
    <input type="text" name="user_name" placeholder="User name">
    <input type="text" name="first_name" placeholder="First name">
    <input type="text" name="last_name" placeholder="Last name">
    <input type="text" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="text" name="phone_number" placeholder="Phone number">
    <input type="submit" name="update_button" value="Update">
</form>

<h3>Delete user accounts</h3>
    <form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="user_name" placeholder="User name">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="delete_button" value="Delete">
</form>

<br><br>
<?php

$j = 5;
echo "<form action='includes/userdelete.inc.php method='post'>";
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
echo "<th>Update</th>";
echo "<th>Delete</th>";
echo "</tr>";

// Create rows for each user
for ($row = 1; $row <= $j; $row++) {
    echo "<tr>";
    echo "<td><input type='text' id='id_$row' name='id_$row' value='$row'></td>";
    echo "<td><input type='text' id='user_name_$row' name='username_$row' value='Dusk'></td>";
    echo "<td><input type='text' id='first_name_$row' name='first_name_$row' value='Dusk'></td>";
    echo "<td><input type='text' id='last_name_$row' name='last_name_$row' value='Darker'></td>";
    echo "<td><input type='text' id='password_$row' name='password_$row' value='dusk'></td>";
    echo "<td><input type='text' id='email_$row' name='email_$row' value='dusk@gmail.com'></td>";
    echo "<td><input type='text' id='phone_$row' name='phone_$row' value='712312312'></td>";
    echo "<td><input type='text' id='created_at_$row' name='created_at_$row' value='2023-10-10 12:49:07'></td>";
    echo "<td><input type='submit' name='update_button_$row' value='Update'></td>";
    echo "<td><input type='submit' name='delete_button_$row' value='Delete'></td>";
    echo "</tr>";
}
echo "</table>";
echo "</form>";

$query = "SELECT * FROM users";
$stmt = $pdo->prepare($query);
$stmt->execute();
?>
</body>
</html>