<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

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