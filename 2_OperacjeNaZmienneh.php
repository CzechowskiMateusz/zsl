<?php
  //Wersja PHP 7.2.33
  echo PHP_VERSION.'<hr>';
  // echo phpinfo();

  $potega=2**10;
  echo $potega,'<br>';

  // Operatory bitowe
  // and &, or |, not ~,xor ^, <<, >>

  $x=0b1010;
  echo $x,'<br>'; //10

  $x= $x << 1;
  echo $x,'<br>'; //10100 (20)

  $x= $x >> 2;
  echo $x,'<br>'; //101 (5)

// porównanie
  $x =10;
  $y=1;

  echo $x <=> $y,'<br>'; // 1 <- x większy,0 <- równie ,-1 <-y większy
  $result =$x <=> $y;
  echo "$result<br>";

  $x =1;
  $y =1.0;

if($x===$y)
{
  echo 'Zmienne są identyczne';
}
else{
  echo 'Zmienne nie są identyczne<br>';
}

echo gettype($x);//intiger
echo gettype($y); //double
echo '<hr>';

/*
postinkrementacja $x++;
preinkrementacja $++x;
postdekrementacja &x--;
predekrementacja &--x;
*/

$x=1;
echo $x;  // 1
$x=$x++;
echo $x;  // 1
$x=++$x;
echo $x;  // 2
$y=++$x;
echo $x;  // 3
$y=$x++;
$y=$y--;
echo $y;  // 2

// ZADANIE

$x=2;
echo $x++; // 2
echo ++$x; // 4
echo $x; // 4
$y=$x++;
echo $y; // 4
$y=++$x;
echo $y; // 6
echo ++$x; // 7

// Operatory rzutowania
// int, float, string, array, object, unset
echo "<hr>";

$test1 = '123abc45';

echo 'Typ danych $test1 = ',gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>";
echo 'Typ danych $test1 = ',gettype($test1),'<hr>';

$test2 = '0';

echo 'Typ danych $test2 = ',gettype($test2);
$test2=(boolean)$test2;
echo "<br>$test2<br>";          // FALSE, jak jest 0 to nic nie wyświetla
echo 'Typ danych $test2 = ',gettype($test2),'<hr>';


$test3 = '10';

echo 'Typ danych $test3 = ',gettype($test3);
$test3=(float)$test3;
echo "<br>$test3<br>";          // FALSE
echo 'Typ danych $test3 = ',gettype($test3),'<hr>';



echo 'Typ danych $test3 = ',gettype($test3);
$x=(unset)$test3;
echo "<br>$x<br>";          // NULL
echo 'Typ danych $x= ',gettype($x),'<hr>';

//Rozmiar typu intiger
  echo PHP_INT_SIZE,'<hr>'; //8

// Kontrola typu zmiennych

  ?>
