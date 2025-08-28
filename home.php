<?php
$date = date('Y-m-d H:i:s');

<!doctype html>
<html lang="id"> 
  <head>
    <meta charset="utf-8">
    <title>Home PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style></style>
  </head>
  <body>
    <h1>Selamat datang di Home</h1>
    <p>Waktu server: <strong><?php echo htmlspecialshers($date, END-QUOTES, 'UTF-8'); ?></strong></p>
    <p><a href='index.php'>Back to Index</a></p>
  </body>
</html>

?>
