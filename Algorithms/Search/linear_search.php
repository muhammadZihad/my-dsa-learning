<?php 
	
	/**
	 * Search item from a given sorted array
	 * @param array $haystack
	 * @param int $needle
	 * @return int|boolean
	 */
	function linear_search(Array $haystack, $needle) {
		$length = count($haystack);
		for ($i=0; $i < $length; $i++) { 
			if($haystack[$i] == $needle) {
				return $i;			}
		}
		return false;
	}

	print_r(linear_search([2,4,5,6,7,8,14,23,64], 8)); // 5

	print_r(linear_search([2,4,5,6,7,8,14,23,64], 25)); // false
?>