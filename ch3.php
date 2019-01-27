<?php
/**
 * Created by PhpStorm.
 * User: ahmad
 * Date: 1/14/2019
 * Time: 11:50
 */
echo 'ahmad';
$heading = "Date\tName\tPayment";
$text  = "She wrote upon it, \"Return to sender\". then \\  \n";
$text1 = 'She wrote upon it, \'Return to sender\'. then \n';
echo '<br>';
echo $heading;
echo '<br>';
echo  "for double quote => $text";
echo '<br>';
echo  $text1;

echo '<hr>';

echo "This is line " . __LINE__ . " of file " . __FILE__ . " located in the ". __DIR__." and namespace: ".__NAMESPACE__;
echo '<br>';
$b ? print "TRUE" : print "FALSE";
echo '<br>';
function longdate($timestamp)
{
    $temp = date("l F jS Y", $timestamp);
    return "The date is $temp";
}

echo longdate(time());
echo '<br>';
echo longdate(time() - 17 * 24 * 60 * 60);
echo '<br>';
function test()
{
    static $count = 0;
    echo $count;
    $count++;
}
for($i=0;$i<5;$i++)
    test();
echo '<hr>';
print_r($GLOBALS) ;
echo '<hr>';
print_r( $_SERVER);
echo '<hr>';
print_r( $_REQUEST);
echo '<hr>';
print_r( $_ENV);
echo '<hr>';
echo $_SERVER['HTTP_REFERER'];





