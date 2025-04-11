<?php
if(isset($_POST['login'])){
    echo"Clicou";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <div class="FORM-BODY">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <h5>Log in to Spotify</h5>
        <button class="Btn-1"> Continue with Google</button><br>
        <button class="Btn-2"> Continue with Facebook</button><br>
        <button class="Btn-3">Continue with Appple</button>
        <Hr class="hr-1"></Hr>
        <input id="Email" placeholder="Email or username" type="text" required>
        <br><input id="password" p+laceholder="Password" type="password" required><br>
    <button name="login" type="submit">Log In</button><br>
    <a target="_blank" href="#">Forgot your password?</a><br>
 Don't have an account?<br>
    <a href="#" target="_blank" rel="noopener noreferrer">Sign up for Spotify</a>
</form>    
</div>
</body>
</html>