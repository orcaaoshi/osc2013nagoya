<!DOCTYPE html>
<html>
<head>
	<title>人口</title>
	<meta charset="UTF-8">
</head>
<body>
	<div>
		<table border="1">
			<tr>
				<th>都道府県</th>
				<th>市町村</th>
				<th>人口（万人）</th>
			</tr>
<?php foreach($datas as $data): ?>
			<tr>
				<td><?= $data['pref']; ?></td>
				<td><?= $data['city']; ?></td>
				<td><?= $data['pop']; ?></td>
			</tr>
<?php endforeach; ?>
		</table>
	</div>
</body>
</html>
