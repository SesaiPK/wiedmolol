<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <title>Login | Wiedmolol</title>
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>


<body>


<div class="container">

    <form class=login" action="login" method="POST">
        <div class="login-buttons">
            <button name="withFacebook"><img src="public/img/fb.svg"><span>Continue with Facebook</span></button>
            <button name="withGoogle"><img src="public/img/google.svg"><span>Continue with Google</span></button>
            <button name="withApple"><img src="public/img/apple.svg"><span>Continue with Apple</span></button>
        </div>
        <div class="messages">
            <?php if (isset($messages)) {
                foreach ($messages as $message) {
                    echo $message;
                }
            } ?>
        </div>
        <input name="email" type="text" placeholder="email@email.com">
        <input name="password" type="password" placeholder="password">
        <button name="logIn" type="submit">Log in</button>
    </form>
</div>
<div class="signup-bar">
    <p>Don't have an account?</p>
    <button name="signUp">Sign up</button>
</div>
</body>

</html>