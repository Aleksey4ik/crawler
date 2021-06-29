<?php

require_once __DIR__ . '/vendor/autoload.php';

use MyApp\Controller\CommentController;
use MyApp\Service\CrawlerServiceFactory;
use MyApp\Service\DataBaseStorageService;
use MyApp\Service\FileStorageService;

$controller = new CommentController(new CrawlerServiceFactory(), new FileStorageService(), new DataBaseStorageService());

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>RESULT</title>
</head>
<body>
    <div class=" wrapper">
      <div class="content">
          <div class="text">
              <?php $result = $controller->crawlPage(); ?>
          </div>
          <div>
            <a class="btn" href="<?=$result[0]['file_name']?>" download>Скачать файл</a>
          </div>
          <div class="button">
              <a class="btn" href="/index.php">BACK</a>
          </div>
      </div>
    </div>

    </body>

</html>