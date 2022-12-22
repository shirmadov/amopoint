<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Content</title>
	<link rel="stylesheet" type="text/css" href="public/css/main.css">

	<style type="text/css">
		.main{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    position: relative;
    margin-top:20px ;
}

.container{
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    height: 100vh;
}
	</style>
</head>
<body>

<div class="main">
	<div class="container">
		<h1>Text</h1>
		<?php
$filename = "./public/files/".$_GET['filename'];

			$array = explode("\n", file_get_contents($filename));

			foreach ($array as $key => $value) { ?>
				<p><?php echo $value; ?></p>
			<?php }
		?>
	</div>
</div>
</body>
</html>