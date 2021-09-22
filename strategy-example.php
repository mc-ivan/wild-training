<?php 
// Clases relacionadas sólo diferen en su comportamiento

/**
* Declara una interfaz para soportar todos los algoritmos
*/
abstract class TextFinder
{
  abstract public function find($text);
}

/**
* Extiende Strategy. Implementa un algoritmo concreto
*/
class OneFinder extends TextFinder
{
  public function find($text)
  {
    return "$text fue encontrado";
  }
}

/**
* Extiende Strategy. Implementa un algoritmo concreto
*/
class OtherFinder extends TextFinder
{
  public function find($text)
  {
    return "$text was found";
  }
}

$finder_one = new OneFinder();
$finder_two = new OtherFinder();

print_r($finder_one->find('blabla') . "\n <br>");
print_r($finder_two->find('asdasd') . "\n");
?>
