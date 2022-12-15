<?php

    if (isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!$username || !$password){
            $error = 'Please enter your username or password.';
        } elseif ($username != $uye['username']){
            $error = 'Your username is incorrect.';
        } elseif ($password != $uye['password']){
            $error = 'Your password is incorrect.';
        } else {

            $_SESSION['time'] = time() + 10;
            $_SESSION['username'] = $uye['username'];

            // header()
            header('Location:/php 15.12.2022');

        }

    }

?>

<?php if (isset($error)): ?>
    <div style="border: 1px solid red">
        <?php echo $error; ?>
    </div>
<?php endif; ?>

<form action="" method="post">
username: <br>
<input type="text" name="username">
<hr>
password: <br>
<input type="password" name="password"><br>
<input type="hidden" name="submit" value="1">
<button type="submit">Login</button>
</form>