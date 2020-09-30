<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    echo '<u>Dane Kontaktowe</u>';
    echo '<br><br>Imie:';
    include_once 'katalog/imie.php';
    echo 'Nazwisko:';
    require_once 'katalog/nazwisko.php';

    ?>
  </body>
</html>
