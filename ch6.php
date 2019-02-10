<?php
/**
 * Created by PhpStorm.
 * User: ahmad
 * Date: 2/10/2019
 * Time: 14:19
 */

error_reporting( E_ALL );
ini_set( "display_errors", 1 );


$products = array(
    'paper' => array(
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photographic Paper"),
    'pens' => array(
        'ball' => "Ball Point",
        'hilite' => "Highlighters",
        'marker' => "Markers"),
    'misc' => array(
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips"
    )
);
echo "<pre>";
foreach($products as $section => $items)
    foreach($items as $key => $value)
        echo "$section:\t$key\t($value)<br>";
echo "</pre>";
echo "<hr>";
$chessboard = array(
    array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'),
    array('p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array(' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
    array('P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'),
    array('R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R')
);
echo "<pre>";
foreach($chessboard as $row)
{
    foreach ($row as $piece)
        echo "$piece ";
    echo "<br>";
}
echo "</pre>";
echo "<hr>";
echo "php array functions";

$fred = array('r', 'n', 'b', 'q', 'k', 'b', 'n', 'r');
$fred1 = 2;

echo (is_array($fred)) ? "fred Is an array and length is " . count($fred) : "fred Is not an array";
echo "<br>";
echo (is_array($fred1)) ? "fred1 Is an array" : "fred1 Is not an array";
echo "<br>";
echo "the chessboard length is " .count($chessboard, 1);
echo "<br>";
echo 'sorting functions'.'<br>';
sort($fred);
print_r($fred) ;echo "<br>";
sort($fred, SORT_NUMERIC);
print_r($fred) ;echo "<br>";
rsort($fred, SORT_STRING);
print_r($fred) ;echo "<br>";

shuffle($fred);
print_r($fred) ;echo "<br>";

$temp = explode(' ', "This is a sentence with seven words");
print_r($temp);echo "<br>";

$temp1 = implode(" # " , $temp);
print_r($temp1);echo "<br>";

$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";
$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');
print_r($contact);echo "<br>";

$j = 23;
$temp = "Hello";
$address = "1 Old Street";
$age = 61;
print_r(compact(explode(' ', 'j temp address age')));echo "<br>";

reset($fred); // Throw away return value
$item = reset($fred); // Keep first element of the array in $item
print_r($item);echo "<br>";
end($fred);
$item = end($fred);
print_r($item);echo "<br>";
print_r($fred);echo "<br>";



