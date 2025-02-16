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
            [
                'name' => "Do Android Dreams of Electric Sheep",
                'author' => "Philip K. Dick",
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => "Project Hail Mary",
                'author' => "Andy Weir",
                'purchaseUrl' => 'https://example.com'
            ]
        ];
    ?>

    <ul>
        <!--  shorthand syntax for loops -->
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>