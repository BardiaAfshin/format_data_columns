<?
require_once('./classes/class.sorter.php');
require_once('./classes/class.parser.php');

$myParser = new parser('./data/soccer.dat');
$returned_data = $myParser->get_parsed_data();


$teams = array();


foreach($returned_data as $some_array)
{
  //array_push($teams, $some_array[2]);
  $teams[$some_array[2]] = abs($some_array[9] - $some_array[2]);
}

$sorter = new sorter($teams);
$sorted_teams = $sorter->sort_my_array($teams);

print_r($sorted_teams);

