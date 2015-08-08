<meta charset="utf-8">
<?php



// $argv=['ali','veli','49','50'];/*Php içinde bulunan özel değişken dizi işlemi görür.Parametre almak zorundadır.*/
//
//
//  $a=22;
//  settype($a,"string"); /*Değişken tipini değiştirme*/
//  echo gettype($a); /*tipi değişen değişkeni ekrana basma*/
//  echo "<br/>".$argv[3];




   $sayi1=5;
   $sayi2=3;

   echo $sayi1+$sayi2."<br/>";
   echo $sayi1-$sayi2."<br/>";
   echo $sayi1*$sayi2."<br/>";
   echo ceil($sayi1/$sayi2)."<br/>"; /* ceil yukarı yuvarlar.*/
   echo floor($sayi1/$sayi2)."<br/>"; /* floor aşağı yuvarlar.*/


/*Değişken içinde değişken*/
$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

$a; //Returns Hello
$$a; //Returns World
$$$a; //Returns Foo
$$$$a; //Returns Bar
$$$$$a; //Returns a

$$$$$$a; //Returns Hello
$$$$$$$a; //Returns World


?>