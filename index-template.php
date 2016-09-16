<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.9, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Basics</title>
  </head>
  <body>
    <h1>
      <ul>
        <?php foreach ($people as $feature => $featureValue): ?>
          <li> <strong><?= $feature ?></strong> : <small><?= $featureValue ?></small> </li>
        <?php endforeach; ?>
      </ul>
    </h1>
  </body>
</html>
