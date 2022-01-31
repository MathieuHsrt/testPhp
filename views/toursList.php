<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>

<body>
    <h1>Voici la liste des tours</h1>
    <ul>
        <?php foreach ($tours as $tour) :  ?>
            <li><a href="/tours/<?= $tour->getSlug(); ?>" ><?= $tour->getTitle(); ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>