<?php
  include __DIR__ . '/database.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://kit.fontawesome.com/0ae8af7e4e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Dischi</title>
  </head>
  <body>
    <div class="cds-container container">
      <?php foreach ($database as $album) {?>

        <div class="cd">
          <img src="<?php echo $album['poster'] ?>">
          <h3><?php echo $album['title'] ?></h3>
          <span class="author"><?php echo $album['author'] ?></span>
          <span class="year"><?php echo $album['year'] ?></span>
        </div>

      <?php }  ?>

    </div>

  </body>
</html>
