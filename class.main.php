<?

require_once('./classes/class.parser.php');

$myParser = new parser('./data/w_data.data');
$returned_data = $myParser->get_parsed_data();

print_r($returned_data);

foreach($returned_data as $row)
{
    foreach($row as $column)
    {
        echo $column;
    }
    echo "\n";
}