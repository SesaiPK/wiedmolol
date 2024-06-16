<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post | Wiedmolol</title>
    <link rel="stylesheet" href="/public/css/geraltofrivia.css">
    <link rel="icon" href="/public/img/logo.svg" type="image/svg+xml">
</head>
<body>
<div class="main-container">
    <header>
        <div class="header-left">
            <a href="homepage"><img src="/public/img/logo.svg" alt="Logo" class="logo"></a>
            <h1 class="site-name">Wiedmolol</h1>
        </div>
        <div class="header-right">
            <input type="text" id="search-bar" class="search-bar" placeholder="Search...">
            <a href="login"><img src="/public/img/profile.svg" alt="Profile" class="icon icon-profile"></a>
        </div>
    </header>
    <section class="content">
        <div class="create-content">
            <h1>Upload</h1>

            <form action="createPost" method="post" enctype="multipart/form-data" class="create-post-form">
                <input name="title" type="text" placeholder="Title" class="form-input title-input">
                <textarea name="content" rows="10" placeholder="Content" class="form-input content-input"></textarea>
                <button type="submit" class="submit-button">Submit</button>
            </form>

        </div>


    </section>
</div>
</body>
</html>
