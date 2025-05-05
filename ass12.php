<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

<h2>User Input Form</h2>

<form action="form-example.php" method="POST">
    Name: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extracting user input using $_POST
    $name = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    echo "<h3>Received Data:</h3>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "Gender: $gender";
}
?>

</body>
</html>
