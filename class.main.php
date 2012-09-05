<?

require_once('./classes/class.parser.php');

$myParser = new parser('./data/w_data.dat');
$returned_data = $myParser->get_parsed_data();

echo $returned_data[0][1];

echo "\t";

echo $returned_data[0][3];

echo "\t";

echo $returned_data[0][5];

echo "\n";