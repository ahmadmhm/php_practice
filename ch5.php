<?php
/**
 * Created by PhpStorm.
 * User: ahmad
 * Date: 1/31/2019
 * Time: 11:39
 */
/*
$object = new User;

print_r($object); echo "<br>";
$object->name = "Joe";
$object->password = "mypass";
print_r($object); echo "<br>";
$object->save_user();
class User
{
    public $name, $password;


     function __construct($param1, $param2)
    {
    // Constructor statements go here
         $username = "Guest";
    }
    function __destruct()
    {
// Destructor code goes here
    }
    function save_user()
    {
        echo "Save User code goes here";
    }

    function get_password()
    {
        return $this->password;
    }
}
*/
/*
Translate::lookup();
class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 3;
// ...
    static function lookup()
    {
        echo self::SPANISH;
    }
}
*/
/*
$temp = new Test();
echo "Test A: " . Test::$static_property . "<br>";
echo "Test B: " . $temp->get_sp() . "<br>";
echo "Test C: " . $temp->static_property . "<br>";
class Test
{
    static $static_property = "I'm static";
    function get_sp()
    {
        return self::$static_property;
    }
}
*/

$object = new Tiger();
echo "Tigers have...<br>";
echo "Fur: " . $object->fur . "<br>";
echo "Stripes: " . $object->stripes;
class Wildcat
{
    public $fur; // Wildcats have fur
    function __construct()
    {
        $this->fur = "TRUE";
    }
}
class Tiger extends Wildcat
{
    public $stripes; // Tigers have stripes
    function __construct()
    {
        parent::__construct(); // Call parent constructor first
        $this->stripes = "TRUE";
    }
}
