<?php
include __DIR__ . '/User.php';
include __DIR__ . '/cart/Int.php';
include __DIR__ . '/cart/Ntn.php';
include __DIR__ . '/Products.php';
include_once __DIR__ . '/Loggable.php';


$alessio= new NotSub('luca', 'rossi', '10/12');
$alessio= new Sub('alessio', 'red', '23/8');
var_dump($alessio);


$cuccia = new Products('cuccia', 23);
var_dump($cuccia);


$esito = $alessio->isExpired();
var_dump($esito);



// eccezione
class FileNotFoundException extends Exception { }

try {
    if (!file_exists('file.txt')) {
        throw new FileNotFoundException('Il file richiesto non esiste.');
    }
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
?>