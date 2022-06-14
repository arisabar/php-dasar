<?php
session_start();

if (isset($_POST['submit'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    echo " ";
    $password = $_POST['password'];

    if ($username == 'sabar' && $password == '12345') {
        $_SESSION['username'] = $username;
        header('location: /php-dasar/extras/dashboard.php');
    } else {
        echo "Incorrect Login";
    }
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">Username:</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit">
</form>