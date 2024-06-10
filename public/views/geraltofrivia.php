<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geralt of Rivia</title>
    <link rel="stylesheet" href="/public/css/character.css">
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>
<body>
<div class="main-container">
    <header>
        <div class="header-left">
            <a href="projects"><img src="/public/img/logo.svg" alt="Logo" class="logo"></a>
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
        <div class="character-profile">
            <img src="/public/img/geraltofrivia.svg" alt="Geralt of Rivia" class="character-img">
            <div class="character-info">
                <h2>Geralt of Rivia</h2>
                <p>Geralt of Rivia, also known as Gwynbleidd, is a witcher, a magically enhanced monster hunter for hire. He is known for his white hair and cat-like eyes, and is one of the main protagonists in the Witcher series by Andrzej Sapkowski.</p>
            </div>
        </div>
    </section>
</div>
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
</body>
</html>
