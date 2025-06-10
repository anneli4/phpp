<?php
$heroTitle='World News';
$posts =[
  ['title' => 'U.S. Esimene postitus', 'date' => '2023-10-01', 'author' => 'Mark', 'content' => 'See on esimene postitus.'],
  ['title' => 'U.S. Teine postitus', 'date' => '2023-10-02', 'author' => 'Anna', 'content' => 'See on teine postitus.'],
  ['title' => 'U.S. Kolmas postitus', 'date' => '2023-10-03', 'author' => 'John', 'content' => 'See on kolmas postitus.'],
];
?>

<?php include 'partials/header.php' ?>


<main class="container">

  <?php include 'partials/hero.php' ?>
  <?php include 'partials/featured.php' ?>


  <div class="row g-5">
    <div class="col-md-8">

      <?php include 'partials/posts.php' ?>

    </div>

    <div class="col-md-4">
      <?php include 'partials/sidebar.php' ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php' ?>