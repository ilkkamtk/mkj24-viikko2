<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST);
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="remember-me">Remember me</label>
    <input type="checkbox" name="remember-me" id="remember-me">

    <button type="submit">Submit</button>
</form>
