<?php
	/*
		fungsi upload data dengan elemennya
		program by stendy b.sakur
		produce 13 januari 2009
	*/
	function namafile($key,$userfile,$site,$folder,&$namafile)
	{
		global $foldermain;
		$folder1 = $foldermain;
		$slash = "\\";
		$mainfolder = $folder1.$site.$slash.$folder.$slash;
		//var_dump($mainfolder);
		$namafile = basename ($_FILES[$userfile]["name"][$key]);
		$file = $mainfolder . $namafile;
		return $file;
	}
	function uploaddata ($key,$userfile, $namafile)
	{
		//buat temporasi  file
		$tempfile =$_FILES[$userfile]["tmp_name"][$key];
		var_dump($namafile);
		move_uploaded_file($tempfile,$namafile);
	}
	function pesanstatus ($status,$file)
	{
		echo "file" . $file;
		echo ", status :" .$status;
		echo "<br />";
	}
	function cekatributfile($key,$userfile,&$ukuranfile)
	{
		$tipefile = $_FILES[$userfile]["type"][$key];
		$ukuranfile =($_FILES[$userfile]["size"][$key] /1024);
		if (stristr($tipefile,"jpeg") === false){
				return 0;
		}else{
			return $tipefile;
		}
	}
	function prosesuploaddata()
	{
		$namafileyangdiupload ="";
		$ukuranfile = 0;
		
		$daftarargumen =func_get_args();
		//var_dump ($daftarargumen);
		$key = func_get_arg(0);			//key
		$kesalahan = func_get_arg(1);	//error
		$site = func_get_arg(2);		//site
		$folder= func_get_arg(3);		//folder
		$namafilefield = func_get_arg(4);//elemen file field
		
		$pathfile = namafile($key,$namafilefield,$site,$folder,$namafileyangdiupload);
		$tipefile = cekatributfile ($key,$namafilefield,$ukuranfile);
		var_dump($kesalahan);
		switch ($kesalahan)
		{
			case UPLOAD_ERR_OK :
				if ($tipefile){
				uploaddata($key,$namafilefield,$pathfile);
				pesanstatus("sukses dikirim",$namafileyangdiupload);
				}else{
					echo "sorry!, bukan tipe jpg/jpeg/pjpeg<br />";
				}
				return "UPLOAD_ERR__OK";
			break;
			case UPLOAD_ERR_INI_SIZE:
				pesanstatus("gagal dikirim, file lebih besar dari php.ini",$namafileyangdiupload);
				return "UPLOAD_ERR_INI_SIZE";
			break;
			case UPLOAD_ERR_FORM_SIZE:
				pesanstatus("gagal dikirim, file > 300 MB", $namafileyangdiupload);
				return "UPLOAD_ERR_FORM_SIZE";
			break;
			case UPLOAD_ERR_PARTIAL:
				pesanstatus("gagal dikirim, hanya sebagian file terkirim", $namafileyangdiupload);
				return "UPLOAD_ERR_PARTIAL";
			break;
		}
	}
function tampildaftar($number=3)
	{
		echo "jumlah data";
		echo "<select name=jmldata id=jmldata>";
		
		for ($i=1; $i<=$number; $i++){
			echo "<option value=$i>$i</option>";
		}
			echo "</select>";
			echo "<input type=submit name = button id = button value=set upload >";
	}
?>