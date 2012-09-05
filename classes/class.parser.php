<?php

/**
 * Description of class
 * This class will parse comma delimited files into two dimensional array
 * note: this will replace double space with single space
 * 
 * Flow usage:
 * 1. initaliaze class with comma delimited file
 * 2. get the parsed data
 *
 * @author Bardia Afshin
 * 
 * ToDo:
 * 1. Abstract class parser into interface
 * 2. Create extended class for parsing based on abstracted interface
 * 3. Extend requirements to make use of tab delmited, comma delimited,etc
 */
class parser {

    /*
     * relative path to file we are importing
     */
    private $relativePathToFile = NULL;
    private $parsed_data = array();
    /*
     * @param relativePathToFile : the relative path to file
     * @return : 2 dimesnioal array if object initialzed with success and file exists
     */
    function __construct($relativePathToFile)
    {
        return $this->set_source_file($relativePathToFile);
    }
    
    
    /*
     * @param relativePathToFile : relative path to file
     * @return : TRUE on success
     * @return : FALSE on failure
     */
    public function set_source_file($relativePathToFile)
    {
        $this->relativePathToFile = $relativePathToFile;
        
        /*
         * taking the setter one step further
         */
        if($this->check_file_exists()){
            $this->relativePathToFile = $relativePathToFile;
        }
        else{
            $this->relativePathToFile = NULL;
            return FALSE;
        }
        
        
        //load the data into 2 dimensional array
         $this->process_source_file($this->relativePathToFile);
    }
    
    /*
     * @param relativePathToFile : relative path to file
     * @return relativePathToFile : return path current file
     * @return NULL if file has not been set
     */
    public function get_source_file()
    {
        return $this->relativePathToFile;
    }
    

 
    /*
     * Check to see if the file exists
     * @param none
     * @return : TRUE if file exists
     * @return : FALSE if file does NOT exist
     */
    protected function check_file_exists()
    {
        if(!file_exists($this->relativePathToFile))
        {
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
    
    /*
     * @return : FALSE if file doesn't exist
     * @return : 2 dimensional array on success containing rows and columsn in
     *           file
     */
    protected function process_source_file()
    {
        //check to see if file exists
        $this->check_file_exists();
        
        try {
            $rows_array = file($this->relativePathToFile);
        } catch (Exception $e) {
            return $e->getMessage();
        }

        $i = 0; //counter used for tracking final array index

        /*
         * two dimensional array used to 
         * store the data of the file beign parsed
         */
        $final_array = array();
        foreach($rows_array as $row)
        {
            $row = preg_replace('!\s+!', ' ', $row);
            $final_array[$i] = explode(" ",$row);
            $i++;
        }
        
        $this->set_parsed_data($final_array);
        return $final_array;
    }
    
    public function set_parsed_data($array)
    {
        $this->parsed_data = $array;
    }
    
    public function get_parsed_data()
    {
        return $this->parsed_data;
    }
    
}
