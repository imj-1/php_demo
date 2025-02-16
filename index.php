<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>
       Recommended Books
    </h1>

    <?php
        $books = [
            "Do Android Dreams of Electric Sheep",
            "The Langoliers",
            "Hail Mary",
        ];
    ?>

    <ul>
        <!--  shorthand syntax for loops -->
        <?php foreach ($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>

    </ul>
</body>
</html>