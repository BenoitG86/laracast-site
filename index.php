<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        $greetings = [
            'Salutations',
            'Coucou',
            'Hello',
            'Alors, j\'aime ou j\'aime pas ?',
            'Bienvenido',
            'Wilkomen',
            'Bienvenue',
            'ようこそ'
        ];
        $count = count($greetings) -1;
        $random = random_int(0, $count);
        echo $greetings[$random] . ' ' . 'le monde.';
        ?>
    </h1>
</body>

</html>