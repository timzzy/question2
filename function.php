<?php

function smallestMissingIntegerElement($theArray){
	
	    // Check if the arguement is not an array
		if (!is_array($theArray)) {
			$output ="Please Check your arguement, as only array can be accepted in this function";
		}
		else{
			//Sort the array
			sort($theArray);

		//Construct a new full array using the min and max valuesof the function arguement
		$full_array = range($theArray[0],max($theArray));

		$missingvalues= array_diff($full_array, $theArray);//Get all the missing values between two arrays

		$output=min($missingvalues);//return the minimum value
		
	}//Now we are sure that we have an array

	return $output;

}//ENDS:: function



?>