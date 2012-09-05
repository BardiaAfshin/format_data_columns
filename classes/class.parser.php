<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Bardia Afshin
 */
class parser {

    /*
     * relative path to file we are importing
     */
    private $relativePathToFile = '';
    
    /*
     * @param relativePathToFile : the relative path to file
     * @return : none
     */
    function __construct($relativePathToFile)
    {
        $this->relativePathToFile = $relativePathToFile;
    }
    
    /*
     * @param relativePathToFile : relative path to file
     * @return : TRUE for successfully identifying file
     * @return : FALSE for not finding file
     */
    public function set_source_file($relativePathToFile)
    {
    
    }
    
    /*
     * @param relativePathToFile : relative path to file
     * @return relativePathToFile : return path current file
     */
    public function get_source_file($relativePathToFile)
    {
    
    }
    
    /* @param : none
     * @return : full path to set relative file 
     */
    private function get_source_file()
    {
        
    }
    
    
    protected function process_source_file()
    {
        try {
            $rows_array = file($this->relativePathToFile);
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        $i = 0; //counter used for tracking final array index

        $final_array = array();
        foreach($rows_array as $row)
        {
            $row = preg_replace('!\s+!', ' ', $row);
            $final_array[$i] = explode(" ",$row);
            $i++;
        }
        
        return $final_array;
    }
    
}
?>
