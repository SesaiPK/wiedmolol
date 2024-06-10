<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="/public/css/projects.css">
    <script>
        function toggleSearchBar() {
            var searchBar = document.getElementById("search-bar");
            if (searchBar.style.display === "none" || searchBar.style.display === "") {
                searchBar.style.display = "block";
                searchBar.focus(); // Set focus on the search bar
            } else {
                searchBar.style.display = "none";
            }
        }
    </script>
</head>
<body>
<div class="main-container">
    <header>
        <div class="header-left">
            <img src="/public/img/logo.svg" alt="Logo" class="logo">
            <h1 class="site-name">Wiedmolol</h1>
        </div>
        <div class="header-right">
            <input type="text" id="search-bar" class="search-bar" placeholder="Search..." style="display: none;">
            <img src="/public/img/search.svg" alt="Search" class="icon" onclick="toggleSearchBar()">
            <a href="projects"><img src="/public/img/categories.svg" alt="Categories" class="icon"></a>
            <a href="login"><img src="/public/img/profile.svg" alt="Profile" class="icon icon-profile"></a>
        </div>
    </header>
    <section class="content">
        <div class="box popular">
            <h2>Popular</h2>
            <div class="popular-item">
                <a href="geraltofrivia"><img src="/public/img/geraltofrivia.svg" alt="Geralt of Rivia" class="popular-img"></a>
                <a href="geraltofrivia" class="popular-text">Geralt of Rivia</a>
            </div>
            <div class="popular-item">
                <a href="yenneferofvengerberg"><img src="/public/img/yenneferofvengerberg.svg" alt="Yennefer of Vengerberg" class="popular-img"></a>
                <a href="yenneferofvengerberg" class="popular-text">Yennefer of Vengerberg</a>
            </div>
            <div class="popular-item">
                <a href="gaunterodimm"><img src="/public/img/gaunterodimm.svg" alt="Gaunter O'Dimm" class="popular-img"></a>
                <a href="gaunterodimm" class="popular-text">Gaunter O'Dimm</a>
            </div>
            <div class="popular-item">
                <a href="emhyrvaremreis"><img src="/public/img/emhyrvaremreis.svg" alt="Emhyr var Emreis" class="popular-img"></a>
                <a href="emhyrvaremreis" class="popular-text">Emhyr var Emreis</a>
            </div>
        </div>
        <div class="box community">
            <h2>Community</h2>
            <?php
            // Example array of posts
            $posts = [
                ["title" => "First Post", "author" => "User1", "content" => "This is the first post content."],
                ["title" => "Second Post", "author" => "User2", "content" => "This is the second post content."],
                ["title" => "Third Post", "author" => "User3", "content" => "This is the third post content."]
            ];

            // Loop through each post and generate the HTML
            foreach ($posts as $post) {
                echo '<div class="post">';
                echo '<h3>' . htmlspecialchars($post['title']) . '</h3>';
                echo '<p><strong>By: </strong>' . htmlspecialchars($post['author']) . '</p>';
                echo '<p>' . htmlspecialchars($post['content']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="box explore">
            <h2>Explore</h2>
            <div class="explore-item">
                <a href="books"><img src="/public/img/books.svg" alt="Books" class="explore-img"></a>
            </div>
            <div class="explore-item">
                <a href="series"><img src="/public/img/series.svg" alt="Series" class="explore-img"></a>
            </div>
            <div class="explore-item">
                <a href="games"><img src="/public/img/games.svg" alt="Games" class="explore-img"></a>
            </div>
        </div>
    </section>
</div>
</body>
</html>
