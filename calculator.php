<?php
//function call
print_r(performMathematicalOperations($argv));

//function for Sum Method
function performMathematicalOperations( $arguments )
{
  	if(isset($arguments) && count($arguments)>1)
  	{
	  	array_shift($arguments);
		$operation 		= isset($arguments[0])? strtolower($arguments[0]) : "" ;
		$str_values 	= isset($arguments[1]) ? $arguments[1] : "";
		if($operation=='sum'){
			$answer = 0; 
			if($str_values!='')
			{
				$arr_values = explode(',',$str_values);
				if(isset($arr_values) && count($arr_values)>0) {
					foreach ($arr_values as $key => $value) {
						if(is_numeric($value)){
							$answer += $value;
						}
					}
				}
			}
			return $answer."\n";
		}
		else{
				return $arguments[0]." is not a mathematical operation.\n";
		}
  	}
  	else
  	{
		return "Please type sum and provide values for sum.\n";
  	}
}
exit (0)
?>
