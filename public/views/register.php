<!DOCTYPE html>

<link rel="stylesheet" type="text/css" href="public/css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="./public/js/script.js" defer></script>
<title>Register | Wiedmolol</title>
<link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>

<body>
<header>
    <div class="header-left">
        <a href="homepage"><img src="/public/img/logo.svg" alt="Logo" class="logo"></a>
        <h1 class="site-name">Wiedmolol</h1>
    </div>
</header>
<div class="container">

    <form class="login" action="register" method="POST">
        <div class="messages">
            <?php
            if (isset($messages)) {
                foreach ($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirmedPassword" placeholder="Confirm Password" required>

        <button name="logIn" type="submit">Sign Up</button>
    </form>
</div>

<div class="signup-bar">
    <p>Already have an account?</p>
    <button name="signUp" onclick="redirectToLogin()">Log In</button>
</div>
<script>
    function redirectToLogin() {
        window.location.href = 'login';
    }
</script>
</body>

