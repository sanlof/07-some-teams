<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/data.php'; ?>

<main class="flex">
    <?php foreach ($teams as $team => $teamData) : ?>
        <article>
            <h2><?= $team; ?></h2>
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
                <li>Grupp: <?= $teamData['group']; ?></li>
            </ul>
        </article>
    <?php endforeach; ?>
</main>

<?php require __DIR__ . '/footer.php'; ?>