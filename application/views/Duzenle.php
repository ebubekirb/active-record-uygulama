<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kayıt Düzenleme Sayfası</title>
</head>
<body>
	<h3>Kayıt Düzenle</h3>

	<form action="<?php echo base_url("personel/update/$row->id"); ?>" method="post">
		<label for="title">Personelin Adını Giriniz</label><br>
		<input type="text" id="title" name="title" value="<?php echo $row->title; ?>">
		<br>
		<label for="detail">Açıklama</label><br>
		<textarea name="detail" id="detail" cols="30" rows="10"><?php echo $row->detail; ?></textarea><br>
		<button type="submit">Kaydet</button>
		<a href="<?php echo base_url("personel"); ?>">Geri Dön</a>
	</form>
</body>
</html>