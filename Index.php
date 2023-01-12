<?php
include __DIR__ . '/User.php';
include __DIR__ . '/cart/Int.php';
include __DIR__ . '/cart/Ntn.php';
include __DIR__ . '/Producs.php';
include_once __DIR__ . '/nhn/Loggable.php';


$alessando= new NotSub('luca', 'rossi', '10/12');
$alessando= new Sub('alessandro', 'red', '23/8');
var_dump($alessando);


$cuccia = new Products('cuccia', 23);
var_dump($cuccia);


$esito = $alessando->isExpired();
var_dump($esito);



// eccezione
class FileNotFoundException extends Exception { }

try {
    if (!file_exists('testfile.txt')) {
        throw new FileNotFoundException('Il file  non esiste.');
    }
} catch (FileNotFoundException $e) {
    echo $e->getMessage();
}
?>