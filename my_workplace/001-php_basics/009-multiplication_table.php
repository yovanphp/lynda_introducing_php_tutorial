<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Multiplication table</title>
	<style>
		table {
			border-collapse: collapse;
		}

		th {
			background-color: #FFF4E2;
		}

		td {
			border-left: 1px solid black;
		}

		.even {
			background-color: #F8FFFF;
		}

		td, th {
			padding: 10px;
		}

		.no-left-border {
			border-left: none;
		}

	</style>
</head>
<body>
	<div>
		<table>
			<caption>Multiplication table</caption>
			<tr>
				<th>&nbsp;</th>
				<?php for($i = 1; $i <= 12 ; $i++): ?>
					<th><?= $i ?></th>
				<?php endfor; ?>
			</tr>
			<?php for ($i = 1; $i <= 12; $i++) : ?>
				<tr class="<?= $i % 2 == 0 ? 'even' : 'odd' ?>">
					<th><?= $i ?></th>
					<?php for ($j = 1; $j <= 12 ; $j++) : ?>
						<td class="<?= $j == 1 ? 'no-left-border' : ''?>"><?= $i * $j ?></td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>
		</table>
	</div>
</body>
</html>