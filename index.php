<?php require __DIR__ . '/data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php foreach ($teams as $team => $teamData) : ?>
        <h2><?= $team ?></h2>
        <p>
            <a href="<?= $teamData['url']; ?>">
                <img
                    src="<?= $teamData['logo']; ?>"
                    alt="<?= $team; ?>s logga" />
            </a>
        </p>
        <ul>
            <li>Liga: <?= $teamData['league']; ?></li>
            <li>Rankning (UEFA): <?= $teamData['uefa-coefficient-ranking']; ?></li>
            <li>Stad: <?= $teamData['city']; ?></li>
            <li>Grupp: <?= $teamData['group'] ?></li>
        </ul>
    <?php endforeach; ?>


</body>

</html>