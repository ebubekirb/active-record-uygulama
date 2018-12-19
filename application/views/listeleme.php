
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listeleme Sayfası</title>
</head>
<body>
	<h3>Personel Listesi</h3>
	<a href="<?php echo base_url("personel/insertPage") ?>" >[Kayit Ekle]</a><br><br>
	<table border="1">
		<thead>
			<th>id</th>
			<th>Ad Soyad</th>
			<th>Açıklama</th>
			<th>İşlem</th>
		</thead>
		<tbody>

			<?php foreach($rows as $row) { ?>
				<tr>
					<td><?php echo $row->id; ?></td>
					<td><?php echo $row->title; ?></td>
					<td><?php echo $row->detail; ?></td>
					<td>
						<a href="<?php echo base_url("personel/updatePage/$row->id"); ?>">[Düzenle]</a>
						<a href="<?php echo base_url("personel/delete/$row->id"); ?>">[Sil]</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<br>
	<form action="<?php echo base_url("personel/sirala") ?>" method="post">
		<select name="sira" id="">
			<option value="id">id ye gore</option>
			<option value="title">title gore</option>
			<option value="detail">detail gore</option>
		</select>

		<button type="submit">Sırala</button>

	</form>
</body>
</html>