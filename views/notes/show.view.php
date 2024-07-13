<?php require base_path('views/partials/head.php') ?>

<?php require base_path('views/partials/nav.php') ?>

<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a class="text-blue-500 underline" href="/notes">Go back to all notes...</a>
        </p>
        <p>
            <?php echo htmlspecialchars($note['body']) ?>
        </p>
        <form class="mt-5" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" value="<?php echo $note['id'] ?>" name="id" id="id">
            <button class="text-red-500">Delete Note</button>
        </form>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>

