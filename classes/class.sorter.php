<?
/*
 * Author: Bardia afshin
 * Class Purpose: To take a set associative array of number and return
 * 				  an associative order in ascending order
 * 
 * To Do:
 * 1. create interface for this class
 */

class sort {

	protected $to_sort = NULL;

	/*
	 * constructor for class
	 */
	function __construct(){
	
	}
	
	/*
	 * @func : set variable to_sort
	 * @param : $array - variable to srt
	 * @return : TRUE on success
	 * @return : FALSE on failure
	 */
	private function set_to_sort($array)
	{
	        if($this->to_sort = $array)
	        {
	            return TRUE;
	        }
	        else
	        {
	            return FALSE;
	        }
	}
	
	/*
	 * @func : get sort variable
	 * @param : NONE
	 * @return: current array set to sort
	 */
	private function get_to_sort()
	{
		return $this->to_sort;
	
	}
	
	/*
	 * @func : sort the associative array
	 * @param : array key value pair to sort
	 * @return: sorted array
	 * @return: FALSE if failed to sort array
	 */
	protected function sort_array($array)
	{
		/*
		 * split the key and value
		 */
		$keys = array();
		$values = array();
		foreach($arry3 as $key => $value)
		{
		 array_push($keys, $key);
		 array_push($values, $value);
		}
	
		$i = 0; //there's better ways of doing this

	
		/*
		 * use our friend array_multisort to sort and merge
		 *
		 */
		if(array_multisort($keys, $values) == TRUE)
		{
		/*
		 * merge 2 arrays back together as a single
		 * associative array
		 */
		foreach($keys as $key)
		{
			$return[$key] = $values[$i];
		}
		return $return;
		}
		else{
			return FALSE;
		}
		
		
	}
}
