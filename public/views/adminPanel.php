
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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
    <div class="admin-panel">
        <h1>Admin Panel</h1>

        <div class="admin-actions">
            <h2>Users</h2>
            <ul class="list">
                <?php if (!isset($users) || empty($users)) : ?>
                    <p>No users available.</p>
                <?php else : ?>
                    <?php foreach ($users as $user) : ?>
                        <li>
                            Name: <?= htmlspecialchars($user->getNickname()) ?><br>
                            Email: <?= htmlspecialchars($user->getEmail()) ?>
                            <form action="deleteUser" method="post">
                                <input type="hidden" name="user_id" value="<?= $user->getId() ?>">
                                <button type="submit" class="delete-button">Delete</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
