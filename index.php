<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $books = [
        [
            'title' => '1984',
            'author' => 'Jor Jor Well',
            'releaseYear' => 1949,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Le Rouge et le Noir',
            'author' => 'Stendal',
            'releaseYear' => 1830,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'title' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    // Logique similaire à celle utilisé dans array_filter de PHP

    // function filter($items, $fn)
    // {
    //     $filteredItems = [];

    //     foreach ($items as $item) {
    //         if ($fn($item)) {
    //             $filteredItems[] = $item;
    //         }
    //     }
    //     return $filteredItems;
    // }

    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 2000;
    });

    ?>

    <h1>Livres</h1>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['title'] . ' écrit par ' . $book['author'] . ' publié en ' . $book['releaseYear'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>