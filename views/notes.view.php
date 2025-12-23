
<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<?php require("partials/benner.php"); ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<?php foreach($notes as $data):?>

  <li>
    <a href="/website/demo/note?id=<?= $data['id'] ?>" class="text-blue-500 hover:underline">
    <?= $data['title'] ?></li>
</a>


  <?php endforeach  ?>


    </div>
     </main>
 <?php require("partials/footer.php"); ?>