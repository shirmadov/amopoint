<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="public/css/main.css">
</head>
<body>

	<div class="main">
		<div class="container">
			<form method="POST" action="controller/FileController.php" enctype="multipart/form-data">
				<input type="file" name="file">
				<input type="submit" name="" value="Send">
			</form>

			<div class="status">
				<?php

				// echo $_SERVER['SERVER_NAME'];

			if(isset($_SESSION['status']) && $_SESSION['status']==1){
				unset($_SESSION['status']);
				?>
				<div class="status__check" id="hideMeAfter5Seconds">
					<p style="text-align: center;">Успешно загружено</p>
					<div class="status__success__icon">
						<svg class="status__icon" fill="#34d15e" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg>
					</div>
				</div>

				<?php
				}else if(isset($_SESSION['status']) && $_SESSION['status']==0){
				unset($_SESSION['status']); ?>

				<div class="status__check" id="hideMeAfter5Seconds">
					<p style="text-align: center;">Только файлы .txt</p>
					<div class="status__success__icon">
						<svg class="status__icon" fill="#ed2626" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/></svg>
					</div>
				</div>
				<?php 
			}
				?>
			</div>


			<div class="list__files">

				<?php
						$mydir = './public/files'; 
  
  						$myfiles = array_diff(scandir($mydir), array('.', '..')); 
  						 foreach ($myfiles as $key => $value) { ?>
  
							<a class="files__link" href="content.php/?filename=<?php echo $value;?>"><?php echo $value; ?></a>

						<?php } ?>
				
			</div>
		</div>
	</div>



</body>
</html>


