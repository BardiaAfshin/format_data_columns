<?php

require_once('/usr/share/php/PHPUnit/Autoload.php'); /* this needs to be moved into ini config file */
require_once('../classes/class.sorter.php');


/**
 * Description of test
 *
 * @author Bardia Afshin (brandonusa@gmail.com)
 * 
 * Note: We'll be keeping this test file brief, and focus on
 * demonstration of capturing class requirements in descriptions
 * rather spend time with assertions as it's redundant 
 * display of knowledge at this point
 */
class ParserTest extends PHPUnit_Framework_TestCase
{

    /*
     * 
     */
    function test_initialize()
    {
        $path = '../data/w_data.dat'; //this is uselsess here
        $some_data = array(array('one'),array('two'));
        $myParser = new parser($path);
        
        $actual = $myParser->set_parsed_data($some_data);
        
        $expected = NULL;
        
        $this->assertEquals($expected, $actual); //NULL == NULL?
    }
    
	

}

$myTest = new ParserTest();
$myTest->run();
?>
