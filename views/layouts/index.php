<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Dimentor</title>
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/empat_backend_week_6/" class="header__logo">DIMENTOR</a>
            <nav class="header__menu">
                <ul class="header__menu-list">
                    <?php if (isset($_COOKIE['token'])) : ?>
                        <li class="header__menu-item"><a href="posts" class="header__menu-link">Posts</a></li>
                    <?php endif ?>
                </ul>
            </nav>
            <?php if (!isset($_COOKIE['token'])) : ?>
                <a href="login?query=someToken" class="header__button">Login</a>
            <?php else : ?>
                <a href="logout" class="header__button">Logout</a>
            <?php endif ?>
        </div>
    </header>

    <section class="content">
        <div class="content__inner">
            <?php echo $content; ?>
        </div>
    </section>
</body>

</html>