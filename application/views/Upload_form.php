<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h3>Personel Resim Yükleme</h3>
	<form action="<?php echo base_url("Fileupload/upload"); ?>" method="post" enctype="multipart/form-data">
		<input type="file" id="dosya" name="file">
		<button type="submit">Upload!!</button>
	</form>
</body>
</html>