<?php require __DIR__ . '/../partials/head.php';?>
<?php require __DIR__ ."/../partials/nav.php"; ?>
<?php require __DIR__ ."/../partials/benner.php"; ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p><a href="/notes" class="text-red-500">go to back...</a></p>
<p><?= htmlspecialchars($note['title'] ) ?></p>


    </div>
     </main>

 <?php require __DIR__ ."/../partials/footer.php"; ?>