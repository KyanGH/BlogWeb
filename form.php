<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Styles/formStyle.css"/>
</head>
<body>
<iframe src="master.php" frameborder="0" width="100%" height="50"></iframe>
    <h1>What's Your Favorite Animal?</h1>
    <form action="phpHandlers/formhandler.php" method="post">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" placeholder="Firstname..." required><br><br>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" placeholder="Lastname..." required><br><br>

        <label for="favoriteAnimal">Favorite Animal:</label>
        <select id="favoriteAnimal" name="favoriteAnimal">
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="rabbit">Rabbit</option>
            <option value="elephant">Elephant</option>
            <option value="lion">Lion</option>
            <option value="other">Other</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
