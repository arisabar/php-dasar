<?php
// echo $_GET['name'];
// echo " ";
// echo $_GET['age'];
if (isset($_POST['submit'])) {
    // echo $_POST['name'];
    // echo " ";
    // echo $_POST['age'];
    // $name = htmlspecialchars($_POST['name']);
    // echo " ";
    // $age = htmlspecialchars($_POST['age']);
    // echo $name;
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    echo " ";
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $name;
}
?>


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