<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile | Wiedmolol</title>
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="/public/css/homepage.css">
</head>
<body>
<header>
    <div class="header-left">
        <a href="homepage"><img src="/public/img/logo.svg" alt="Logo" class="logo"></a>
        <h1 class="site-name">Wiedmolol</h1>
    </div>
</header>
<div class="container">
    <div class="profile-box">
        <h1>User Profile</h1>
        <div class="user-info">
            <?php
            if (isset($user)) {
                echo '<p>' . 'Name: ' . htmlspecialchars($user->getNickname()) . '</p>';
                echo '<p >' . 'Email: ' . htmlspecialchars($user->getEmail()) . '</p>';
            }
            ?>
        </div>
        <div class="profile-actions">
            <div class="messages">
                <?php if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                } ?>
            </div>
            <?php if ($user->getRole() == 1) : ?>
                <form action="adminPanel" method="get">
                    <button type="submit">Admin Panel</button>
                </form>
            <?php endif; ?>
            <form action="changePassword" method="post">
                <input type="password" name="current_password" placeholder="Current Password">
                <input type="password" name="new_password" placeholder="New Password">
                <button type="submit">Change Password</button>
            </form>
            <form action="logout" method="post">
                <button type="submit">Logout</button>
            </form>
            <form action="deleteAccount" method="post">
                <button type="submit">Delete Account</button>
            </form>
        </div>
    </div>
</div>
</body>
