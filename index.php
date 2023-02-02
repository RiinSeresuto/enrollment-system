<?php $title = "Dashboard";?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
  <head>
    <?php include('./components/head.php') ?>
  </head>
  <body>
    <div class="view">
      <aside>
        <?php include('./components/sidebar.php') ?>
      </aside>
      <main class="container main-interface">
        <div class="main-view">
          <?php include('./components/top-nav.php') ?>
          <?php include('./views/Home.php') ?>
        </div>
      </main>
    </div>

  </body>
</html>
