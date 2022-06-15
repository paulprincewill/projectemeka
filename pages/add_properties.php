<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="../assets/css/dashboard/style.css" />
  </head>
  <body>
    <main>
      <?php
      include "../frontend/ui/_layouts/sidebar.php"
      ?>

      <div class="page_content">
        <?php
        include "../frontend/ui/properties/add_property.php"
        ?>
      </div>
      
    </main>
  </body>
</html>
