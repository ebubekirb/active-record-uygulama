<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Yeni Kayıt Sayfası</title>
</head>
<body>
	<h3>Yeni Kayıt Ekle</h3>

	<form action="<?php echo base_url("personel/insert"); ?>" method="post">
		<label for="title">Personelin Adını Giriniz</label><br>
		<input type="text" id="title" name="title">
		<br>
		<label for="detail">Açıklama</label><br>
		<textarea name="detail" id="detail" cols="30" rows="10"></textarea><br>
		<button type="submit">Kaydet</button>
		<a href="<?php echo base_url("personel"); ?>">Geri Dön</a>
	</form>
</body>
</html>