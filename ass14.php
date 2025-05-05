<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_POST["username"];
    setcookie("useremail", $_POST["email"], time() + (86400 * 7), "/"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session and Cookie Example</title>
</head>
<body>

<h2>User Info Form</h2>
<form method="post" action="">
    Username: <input type="text" name="username" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

<hr>

<h3>Stored Data:</h3>
<?php
if (isset($_SESSION["username"])) {
    echo "Session - Username: " . $_SESSION["username"] . "<br>";
} else {
    echo "No session data found.<br>";
}

if (isset($_COOKIE["useremail"])) {
    echo "Cookie - Email: " . $_COOKIE["useremail"] . "<br>";
} else {
    echo "No cookie data found.<br>";
}
?>

</body>
</html>
