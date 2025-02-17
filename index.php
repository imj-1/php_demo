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
                'releaseYear' => 1968,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => "Project Hail Mary",
                'author' => "Andy Weir",
                'releaseYear' => 2021,
                'purchaseUrl' => 'https://example.com'
            ],
            [
                'name' => 'The Martian',
                'author' => 'Andy Weir',
                'releaseYear' => 2011,
                'purchaseUrl' => 'https://example.com'
            ],
        ];

        $filteredBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Andy Weir';
        });
    ?>



    <ul>
        <!--  shorthand syntax for loops -->
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>
</html>