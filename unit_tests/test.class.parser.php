<?php

require_once('/usr/share/php/PHPUnit/Autoload.php');
require_once('../classes/class.parser.php');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Bardia Afshin (brandonusa@gmail.com)
 */
class ParserTest extends PHPUnit_Framework_TestCase
{

    /*
     * te
     */
    function test_set_parsed_data()
    {
        $path = '../data/w_data.dat'; //this is uselsess here
        $some_data = array(array('one'),array('two'));
        $myParser = new parser($path);
        
        $actual = $myParser->set_parsed_data($some_data);
        
        $expected = NULL;
        
        $this->assertEquals($expected, $actual); //NULL == NULL?
    }
    
    function test_get_parsed_data()
    {
        $path = '../data/w_data.dat'; //this is uselsess here
        $some_data = array(array('one'),array('two'));
        $myParser = new parser($path);
        
        $myParser->set_parsed_data($some_data);
        
        $expected = $some_data;
        $actual = $myParser->get_parsed_data();
        
        $this->assertEquals($expected, $actual); //NULL == NULL?
    }
    
    
    /*
     * Test Case
     * 1. Initialize parser object
     * 2. Verified file exists as expected from git clone
     */
    function testClassInitialize()
    {
        $path = '../data/w_data.dat';
        $myParser = new parser($path);
        $actual = $myParser->get_source_file();
        
        $expected = $path;
        
        $this->assertEquals($expected, $actual);
        
    }
    
    /*
     * Test case - get_source_file()
     * Verify file not found returns FALSE
     */
    function testClassInitializeFileNotFound()
    {
        $path = './some_bogus_file_doesnt_exist.dat';
        $myParser = new parser($path);
        $expected = NULL;
        $this->assertEquals($expected, $myParser->get_source_file());
    }

}

$myTest = new ParserTest();
$myTest->run();
?>
