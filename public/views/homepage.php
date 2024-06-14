<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiedmolol</title>
    <link rel="stylesheet" href="/public/css/homepage.css">
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>
<body>
<header>
    <div class="header-left">
        <a href="homepage"><img src="/public/img/logo.svg" alt="Logo" class="logo"></a>
        <h1 class="site-name">Wiedmolol</h1>
    </div>
    <div class="header-right">
        <input type="text" id="search-bar" class="search-bar" placeholder="Search...">
        <a href="profile"><img src="/public/img/profile.svg" alt="Profile" class="icon icon-profile"></a>
    </div>
</header>
<div class="main-container">

    <section class="content">
        <div class="box popular">
            <h2>Popular</h2>
            <div class="popular-item">
                <a href="geraltofrivia"><img src="/public/img/geraltofrivia.svg" alt="Geralt of Rivia"
                                             class="popular-img"></a>
                <a href="geraltofrivia" class="popular-text">Geralt of Rivia</a>
            </div>
            <div class="popular-item">
                <a href="yenneferofvengerberg"><img src="/public/img/yenneferofvengerberg.svg"
                                                    alt="Yennefer of Vengerberg" class="popular-img"></a>
                <a href="yenneferofvengerberg" class="popular-text">Yennefer of Vengerberg</a>
            </div>
            <div class="popular-item">
                <a href="gaunterodimm"><img src="/public/img/gaunterodimm.svg" alt="Gaunter O'Dimm" class="popular-img"></a>
                <a href="gaunterodimm" class="popular-text">Gaunter O'Dimm</a>
            </div>
            <div class="popular-item">
                <a href="emhyrvaremreis"><img src="/public/img/emhyrvaremreis.svg" alt="Emhyr var Emreis"
                                              class="popular-img"></a>
                <a href="emhyrvaremreis" class="popular-text">Emhyr var Emreis</a>
            </div>
        </div>
        <div class="box community">
            <h2>Community</h2>
            <a href="createPost" class="create-post-button">Create Post</a>
            <section class="posts">
                <?php
                if (isset($posts) && is_array($posts) && count($posts) > 0) {
                    foreach ($posts as $post) {
                        echo '<div class="post">';
                        echo '<h3>' . htmlspecialchars($post->getTitle()) . '</h3>';
                        echo '<p class="author"><strong>By: </strong>' . htmlspecialchars($post->getAuthorName()) . '</p>';
                        echo '<p class="content">' . htmlspecialchars($post->getContent()) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No posts available.</p>';
                }
                ?>
            </section>
        </div>
    </section>
</div>
</body>

<template id="post-template">
    <div class="post">
        <h3>title</h3>
        <p class="author"><strong>By: </strong>author</p>
        <p class="content">content</p>
    </div>

</template>
</html>
