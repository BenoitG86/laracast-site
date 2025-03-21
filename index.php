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

    function filterByAuthor() {
    
    }


    ?>

    <h1>Livres</h1>

    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book['author'] === 'Andy Weir'): ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['title'] . ' écrit par ' . $book['author'] ?>
                    </a>
                <?php endif; ?>

            </li>
        <?php endforeach; ?>

    </ul>

</body>

</html>