<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <a class="text-blue-500 hover:underline" href="/note?id=<?php echo $note['id']  ?>">
                <li><?php echo $note['body'] ?></li>
            </a>

        <?php endforeach; ?>
    </div>
</main>
<?php require('partials/footer.php') ?>

