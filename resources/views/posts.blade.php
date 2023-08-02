<!doctype html>
<html lang="en">
<head>
    <title>My Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <a href="/posts/<?= $post->slug; ?>">
                <h1><?= $post->title; ?></h1>
            </a>

            <div>
                <?= $post->body; ?>
            </div>
        </article>
   <?php endforeach; ?>
</body>
</html>
