<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <title>Register | Wiedmolol</title>
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>

<body>

<div class="container">
    <form action="register_process.php" method="POST">
        <div class="login-buttons">
            <button name="withFacebook" type="button">
                <img src="public/img/fb.svg" alt="Facebook">
                <span>Sign up with Facebook</span>
            </button>
            <button name="withGoogle" type="button">
                <img src="public/img/google.svg" alt="Google">
                <span>Sign up with Google</span>
            </button>
            <button name="withApple" type="button">
                <img src="public/img/apple.svg" alt="Apple">
                <span>Sign up with Apple</span>
            </button>
        </div>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <button name="logIn" type="submit">Sign Up</button>
    </form>
</div>

<div class="signup-bar">
    <p>Already have an account?</p>
    <button name="signUp">Log in</button>
</div>
</body>

</html>
