
<?php

final class check_input{
	//public $filepath;


	public static function test_input($data){
		
		$data = trim($data);
		$data = stripslashes($data);  
		$data = htmlspecialchars($data);
		return $data;
		
		



}
}
?>