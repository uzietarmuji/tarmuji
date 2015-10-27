<?php
	function prosesupload ($userfile="userfile", // nama field
							$site="\php_oop", 	// nama site
							$folder=""			//nama folder
								)
	{
		global $foldermain;
			if ($folder !=""){
				$main_folder =$foldermain.$site."\\".$folder."\\";
			}else{
				$main_folder=$foldermain.$site."\\";
			}
		var_dump($main_folder);
		if ($userfile != ""){
			$filename = basename ($_FILES[$userfile]["name"]);
			$file_upload =$main_folder . $filename;
			if (move_uploaded_file($_FILES[$userfile]["tmp_name"],
					$file_upload)){
					echo "file:". $filename . "<br />";
					echo "status:sukses di-upload";
				}else{	
					echo "file:" . $filename ."<br />";
					echo "status:gagal di-upload";
				}
				
			}
					
		}

?>