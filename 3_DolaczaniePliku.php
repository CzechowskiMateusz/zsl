<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      Początek storny
      <?php

      include './3_1_File.php';
      include_once './3_1_File.php';  // TYLKO RAZ DODAJE (JEŻELI WYSTĘPUJE TO NIE DODA)
      include './3_1_File.php';  //WYŚWIETLA RESZTE STRONY MIMO BŁEDU

      echo 'Require<br>';

      require './3_1_File.php'; //NIE WYŚWIETLA RESZTY STRONY MIMO BŁEDU
      require_once './3_1_File.php'; // TYLKO RAZ DODAJE (JEŻELI WYSTĘPUJE TO NIE DODA)



      ?>

      Koniec strony

  </body>
</html>
