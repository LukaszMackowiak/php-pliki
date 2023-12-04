<?php
$repeat = 4;

while ($i=0, $i<$repeat, $i++){
    $zapis = $zapis + "Młodości, dodaj mi skrzydła!";
}

$plik = fopen("oda.txt", "r");
fputs($plik, $zapis);
fclose($plik);

$plik = fopen("oda.txt", "r");
fgets($plik, "1")
fclose($plik);


?>

fgets()
feof()
fread()
fgetc()
readfile()
file_get_contents()
file()

mkdir()
rmdir()
opendir() => deskryptor
* readdir('deskryptor')
closedir('deskryptor')
* scandir() => tablica
is_dir()