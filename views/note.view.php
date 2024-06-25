<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a class="text-blue-500 underline" href="/notes">Go back to all notes...</a>
        </p>
        <p>
            <?php echo htmlspecialchars($note['body']) ?>
        </p>

    </div>
</main>
<?php require('partials/footer.php') ?>

