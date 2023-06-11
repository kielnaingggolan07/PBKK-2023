<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Hubungkan file CSS eksternal dari ColorHunt -->
	<link rel="stylesheet" type="text/css" href="path/to/colorhun.css">

	<meta charset="utf-8">
	<title>About Us</title>

	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			padding: 0;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 40px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			font-size: 32px;
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}

		h2 {
			font-size: 24px;
			text-align: center;
			color: #666;
			margin-bottom: 30px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 30px;
		}

		th, td {
			padding: 10px;
			text-align: center;
			border-bottom: 1px solid #ccc;
		}

		th {
			background-color: #f9f9f9;
			font-weight: bold;
		}

		tbody tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		.footer {
			text-align: right;
			font-size: 12px;
			color: #999;
			margin-top: 20px;
		}
	</style>
</head>
<body>

<div class="container" style="margin-top:200px; background-color:#00FFCA;">
	<h1>About Us</h1>
	<h2>Tugas MVC CI</h2>

	<table>
		<thead>
			<tr>
				<th>Nama</th>
				<th>Hesekiel</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>NRP</td>
				<td>5025201054</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>PBKK - D</td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td>2023</td>
			</tr>
		</tbody>
	</table>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
