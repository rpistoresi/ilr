<?php
// seed with microseconds
function make_seed()
{
  list($usec, $sec) = explode(' ', microtime());
  return $sec + $usec * 1000000;
}
srand(make_seed());
$randval = rand();

//echo $randval;

echo '<br>';


// $fileTempName = "raytest.jpg";

// $fileName = substr($fileName, 0, strpos($fileName, "test"));

// $ext2 = pathinfo($fileTempName, PATHINFO_EXTENSION);

// $num = 12;

// echo $fileName . (string) $num . "." . $ext2;

$path_parts = pathinfo('raytest.jpg');

// echo $path_parts['dirname'], "\n";
// echo $path_parts['basename'], "\n";
echo $path_parts['extension'], "\n";
echo $path_parts['filename'], "\n"; // filename is only since PHP 5.2.0


?>
