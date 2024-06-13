<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css"/>
    <title>Login | Wiedmolol</title>
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

    <form class="login" action="login" method="POST">
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
    <button name="signUp" onclick="redirectToRegister()">Sign up</button>
</div>
<script>
    function redirectToRegister() {
        window.location.href = 'register';
    }
</script>
</body>
