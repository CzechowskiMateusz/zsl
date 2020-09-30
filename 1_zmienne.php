<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Zmienne </title>
  </head>

  <body>
    <?php
     $name='Janusz';
     echo "Imię:$name<br>";

     //konkatenacja .
     echo "text";

     // Typy Danych
     //boolean
     $prawda=true;
     $fałsz=false;

     echo $prawda;  //1
     echo $fałsz;  // nie wyświetla

     //integer
     $całkowita=10;
     $hex=0xA;
     $oct=010;
     $bin=0b1011;

     echo '<hr>'.$hex;
     echo '<br>'.$oct;
     echo '<br>'.$bin.'<hr>';
     //  echo "<br>$bin<br>";

     //składnia heredoc
     $name='Krystyna';
     $surname='Nowak';

     $text =<<< ETYKIETA
     Imię: $name <br>
     Imię: $surname <hr>
ETYKIETA;

     echo $text;

     echo <<< E
     Drugi heredoc<hr>
E;

// składnia nowdoc
    $city='Poznań';

    echo <<< 'E'
    Miasto: $city;
E;

echo "<br>Nazwa zmiennej \$city, wartość: $city";

// echo '$hex';
     ?>
  </body>
</html>
