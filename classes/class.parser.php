<?php

/**
 * Description of class
 * This class will parse comma delimited files into two dimensional array
 * note: this will replace double space with single space
 *
 * @author Bardia Afshin
 * 
 * ToDo:
 * 1. Abstract class parser into interface
 * 2. Create subclass for parsing based on abstracted interface
 * 3. Extend requirements to make use of tab delmited, comma delimited,etc
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
    
    /*
     * @return : FALSE if file doesn't exist
     * @return : 2 dimensional array on success containing rows and columsn in
     *           file
     */
    protected function process_source_file()
    {
        if(!file_exists($this->relativePathToFile))
        {
            return FALSE;
        }
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
        
        return $final_array;
    }
    
}
?>
