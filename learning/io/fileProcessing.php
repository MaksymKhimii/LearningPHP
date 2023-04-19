<?php
//one function for creating and opening file:
$testFile = fopen('testFile.txt', 'w');
//to write to the file:
$txt = 'Hello World!';
fwrite($testFile, $txt);
fclose($testFile);


$filePath = '../../txt/file1.txt';
// reading:
//echo readfile($fileName);

//the second way:
$fileOpening = fopen($filePath, 'r') or die('Cannot open file(');
/*echo fread($fileOpening, filesize($filePath));
fclose($fileOpening);*/

// function for reading only one string
//(the second parameter is count of bytes that need to read)
echo fgets($fileOpening, 2);

// function feof() - to find end of the file(we can use it in while loop)
// for example:
while (!feof($fileOpening)){
    echo fgets($fileOpening, 258);
}