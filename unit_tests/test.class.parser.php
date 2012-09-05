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

    function testThatItWorks() {
        self::assertTrue(true);
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
     * Test case 
     * Verify file not found returns FALSE
     */
    function testClassInitializeFileNotFound()
    {
        $path = './some_bogus_file_doesnt_exist.dat';
        $actual = new parser($path);
        print_r($actual);
        $expected = FALSE;
        $this->assertEquals($expected, $actual);
    }

}

$myTest = new ParserTest();
$myTest->run();
?>
