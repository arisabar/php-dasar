<?php
// echo $_GET['name'];
// echo " ";
// echo $_GET['age'];
if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo " ";
    echo $_POST['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Sabar&age=23">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit">
</form>