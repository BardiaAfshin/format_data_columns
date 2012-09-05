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
     * 2. Assert single parameter passed to object passes
     */
    function testClassInitialize()
    {
        $path = '../data/w_data.dat';
        $myParser = new parser($path);
        $actual = $myParser->get_source_file();
        
        $expected = $path;
        
        $this->assertEquals($expected, $actual);
        
    }

}

$myTest = new ParserTest();
$myTest->run();
?>
