<?php
// Example for array_dump.class.php :

// include the class file
require_once("array_dump.class.php");

// now initialize them
$ar_dump = new array_dump();

// now i suppose you have an array ... like this
$my_array1 = Array("first", "seconds");
$my_array1[0] = Array(25, "another");
$my_array1["first"] = Array(25, "another", "try");
$my_array1["first"]["another"] = Array(17, 05, 1978);
$my_array1["first"]["another"][3] = Array("one", "try");
$my_array1["seconds"] = Array("more", "other");

// ... and maybe another ...
$my_array2 = Array("just", "another", "array");

// now do you want view your multidimensional array ?
echo $ar_dump->dump($my_array1);

// ... or another, simple, array with specified name on result ...
echo $ar_dump->dump($my_array2, "my_array2");



// If you want you can use this method too ...
// [ name as second parameter is optional ]
$ar_dump2 = new array_dump($my_array1, "my_array1");
// you could specify the max lenght to show for string values ...
// [ default 50 ]
$ar_dump2->max_length(3);
echo $ar_dump2->dump();
?>

Visit this page for an example:
http://www.3site.it/varie/try_array_dump.php
