<?php
/**
 * Created by PhpStorm.
 * User: ahmad
 * Date: 2/10/2019
 * Time: 14:56
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

printf("There are %d items in your basket", 3);echo "<br>";
printf("My name is %s. I'm %d years old, which is %X in hexadecimal",
    'Ahmad', 33, 33);echo "<br>";
printf("<span style='color:#%X%X%X'>Hello</span>", 65, 127, 245);echo "<br>";
$r = 200; $g = 150 ; $b = 100;
printf("<span style='color:#%X%X%X'>Hello</span>", $r-20, $g-20, $b-20);echo "<br>";
printf("The result is: $%.2f", 123.42 / 12);echo "<br>";
echo "<hr>";
echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n",  123.42 / 12);
// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);
// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);
printf("The result is $%'@15.2f\n", 123.42 / 12);
echo "<hr>";
echo "<pre>"; // Enables viewing of the spaces
$h = 'Rasmus';
printf("[%s]\n", $h); // Standard string output
printf("[%12s]\n", $h); // Right justify with spaces to width 12
printf("[%-12s]\n", $h); // Left justify with spaces
printf("[%012s]\n", $h); // Zero padding
printf("[%'#12s]\n\n", $h); // Use the custom padding character '#'
$d = 'Rasmus Lerdorf'; // The original creator of PHP
printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // Left justify, pad '@', cutoff 10 chars
echo "<br>";
$out = sprintf("The result is: $%.2f\n", 123.42 / 12);
echo $out;
echo time();
echo "<br>";
echo mktime(10, 33, 20, 2, 14, 2019);
echo "<br>";
echo date("l F jS, Y - G:i;sa", time()+3.5 * 60 * 60);
echo "<br>";
echo date("D, d M Y H:i:s O", time()+3.5 * 60 * 60);
echo "<br>";
echo date(DATE_ATOM). "\n";
//echo "<br>";
echo date(DATE_COOKIE);
echo "<br>";
$month = 9; // September (only has 30 days)
$day = 31;
$year = 2018; // 2018
if (checkdate($month, $day, $year)) echo "Date is valid";
else echo "Date is invalid";

echo "<hr>";
echo "file handling\n";
if (file_exists("src_files/ahmad1.txt"))
    echo "File exists\n";
else{
    echo "File not exists\n";
//    if (!mkdir("src_files", 0777, true)) {
//        die('Failed to create agh folder...');
//    }
    $fh = fopen("src_files/testfile.txt", 'w+') or die("Failed to create file");

    $text = "Line 1
    Line 2
    Line 3
    ";

    fwrite($fh, $text) or die("Could not write to file");
    echo "File 'testfile.txt' written successfully"; echo "<br>";
    $fh = fopen("src_files/testfile.txt", 'r') or
    die("File does not exist or you lack permission to open it");
    $line = fgets($fh);
    fclose($fh);
    echo $line;
    echo "File 'testfile.txt' read successfully"; echo "<br>";
}
/*
///////copying the file
if (!copy('src_files/testfile.txt', 'src_files/testfile2.txt')) echo "Could not copy file";
else echo "File successfully copied to 'testfile2.txt'";
echo "<br>";
///////moving the file
if (!rename('src_files/testfile2.txt', 'src_files/testfile2.new'))
    echo "Could not rename file";
else echo "File successfully renamed to 'testfile2.new'";echo "<br>";
///////deleting the file
if (!unlink('src_files/testfile2.new')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";echo "<br>";
echo exec('whoami');  echo "<br>";
echo exec('pwd');  echo "<br>";
exec(escapeshellcmd($cmd), $output, $status);
if ($status) echo "Exec command failed";
else
{
echo "<pre>";
foreach($output as $line) echo htmlspecialchars("$line\n");
echo "</pre>";
echo getcwd();  echo "<br>";
*/

$fh = fopen("src_files/testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file");
fclose($fh);

/*
 if (flock($fh, LOCK_EX))
{
fseek($fh, 0, SEEK_END);
fwrite($fh, "$text") or die("Could not write to file");
flock($fh, LOCK_UN);
}
*/
echo "File 'testfile.txt' successfully updated";echo "<br>";
echo "<pre>"; // Enables display of line feeds
echo file_get_contents("src_files/testfile.txt");
echo "</pre>"; // Terminates pre tag

//echo file_get_contents("http://oreilly.com");

echo "
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='ch7.php' enctype='multipart/form-data'>
Select File: <input type='file' name='filename' size='10'>
<input type='submit' value='Upload'>
</form>";

if ($_FILES)
{
    $name = $_FILES['filename']['name'];
//    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
//    echo "Uploaded image '$name'<br><img src='$name'>";

    switch($_FILES['filename']['type'])
    {
        case 'image/jpeg': $ext = 'jpg'; break;
        case 'image/gif': $ext = 'gif'; break;
        case 'image/png': $ext = 'png'; break;
        case 'image/tiff': $ext = 'tif'; break;
        default: $ext = ''; break;
    }
    if ($ext)
    {
        $n = "image.$ext";
        move_uploaded_file($_FILES['filename']['tmp_name'], $n);
        echo "Uploaded image '$name' as '$n':<br>";
        echo "<img src='$n'>";
    }
    else echo "'$name' is not an accepted image file";
}
else echo "No image has been uploaded";

echo "</body></html>";