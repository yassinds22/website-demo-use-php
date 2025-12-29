
<?php require __DIR__ . '/../partials/head.php';?>
<?php require __DIR__ ."/../partials/nav.php"; ?>
<?php require __DIR__ ."/../partials/benner.php"; ?>


  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
<ul>
  <?php foreach($notes as $data):?>

  <li>
    <a href="/note?id=<?= $data['id'] ?>" class="text-blue-500 hover:underline">
    <?= htmlspecialchars($data['title'] )?></li>
</a>


  <?php endforeach  ?>
</ul>

<p class="mt-5"><a href="/create-notes" class="text-blue-500 hover:underline">Create Note</a></p>


    </div>
     </main>
 <?php require_once __DIR__."/../partials/footer.php"; ?>