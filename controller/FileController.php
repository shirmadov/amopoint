<?php

	session_start();
	$status = 0;

	try {


		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$uploaddir = '../public/files/';
			$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
			$newFilename = uniqid(rand()).'.'.$ext;
			$uploadfile = $uploaddir.$newFilename;
		
		if ($ext == "txt" && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {


			$_SESSION['status'] = 1;

    		header("Location:../index.php");
    		exit();
		} else {
			$_SESSION['status'] = 0;
    		header("Location:../index.php");
		}



		}else if($_SERVER['REQUEST_METHOD'] == 'GET'){
// var_dump($_GET['filename']);

			$filename = "../public/files/".$_GET['filename'];

			$array = explode("\n", file_get_contents($filename));

			var_dump($array);
		}
		
	} catch (Exception $e) {
		return $e->getMessage();
	}
?>
