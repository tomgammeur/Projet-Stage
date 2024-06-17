<?php require('head.php') ?>
<?php require('nav.php') ?>
<?php require('banner.php') ?>

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <?php foreach ($notes as $note) :?>
        <li>
          <div class="text-blue-500 hover:underline">
            <p><?= $note['body'] ?></p>
        </div>    
      </li>
    <?php endforeach; ?>
<h1 class="text-2xl font-bold">Bienvenue sur la page des Notes !</h1>
<p>
    <a href="index.php" class="text-blue-500 underline">Retourner à la page d'acceuil</a>
</p>
</div>
  </main>
  <?php require('footer.php') ?>
