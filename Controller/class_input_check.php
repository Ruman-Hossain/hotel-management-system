
<?php

final class check_input{
	


	public static function test_input($data){
		
		$data = trim($data);
		$data = stripslashes($data);  
		$data = htmlspecialchars($data);
		return $data;
		
		



}
			public static function test_img($img_name,$img_loc){
				
				$filename = $_FILES['$img_name']['name'];
				$tmpname = $_FILES['$img_name']['tmp_name'];
				$filesize = $_FILES['$img_name']['size'];
				$filetype = $_FILES['$img_name']['type'];
				
					//if($filetype != 'jpeg' || $filetyp != 'jpg' || $filetyp!="JPEG") echo "Unsupported Image type";
					
					//else{
						$filepath = $img_loc.$filename;
						$rslt = move_uploaded_file($tmpname,$filepath);
								if(!isset($rslt)) echo "Failed to Upload to ".$filepath;
								else{
									echo "successfully Uploaded to ".$filpath;
									return $filepath;
								}
					//}
				
				
			}
}
?>