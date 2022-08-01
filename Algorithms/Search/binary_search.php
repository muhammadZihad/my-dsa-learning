<?php 
	
	/**
	 * Search item from a given sorted array
	 * @param array $haystack
	 * @param int $needle
	 * @return int|boolean
	 */
	function binary_search(Array $haystackZ, $needle) {

		$start = 0;

		$end = count($haystack) - 1;

		while($start <= $end) {

			$mid = round(($start + $end) / 2);

			if ($haystack[$mid] == $needle) {
				return $mid;
			}

			if ($haystack[$mid] > $needle) {
				$end = $mid - 1;
			} else {
				$start = $mid + 1;
			}
		}
		return false;
	}

	print_r(binary_search([2,4,5,6,7,8,14,23,64], 8)); // 5

	print_r(binary_search([2,4,5,6,7,8,14,23,64], 25)); // false
?>