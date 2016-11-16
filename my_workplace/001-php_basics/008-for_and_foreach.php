<?php
$employees = [
	[
		'first_name' => 'Yovan',
		'last_name' => 'Juggoo',
		'skills' => ['Java', 'PHP', 'Android', 'Node JS', 'Ruby on Rails']
	],
	[
		'first_name' => 'John',
		'last_name' => 'Doe',
		'skills' => ['C++', 'C', 'C#', 'Ruby on Rails']
	],
	[
		'first_name' => 'Jane',
		'last_name' => 'Smith',
		'skills' => ['Camel', 'Pascal', 'Delphi']
	],
	[
		'first_name' => 'Tim',
		'last_name' => 'Carlson',
		'skills' => ['ASP.net', 'VB.net', 'C#', 'Node JS', 'Ruby on Rails']
	]
];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>For Loop</title>
		<style>
			table {
				float: left;
				border-collapse: collapse;
				margin-left: 30px;
			}
			table, td, tr, th {
				border: 1px solid #eee;
			}

			ul, li {
				padding: 0;
				margin: 0;
			}

			li {
				list-style: none;
			}

			td {
				vertical-align: top;
			}
		</style>
	</head>
	<body>
		<div>
			<table>
				<caption>for</caption>
				<tr>
					<th>Employees</th>
					<th>Skills</th>
				</tr>
				<?php for($i = 0; $i < count($employees); $i++) : ?>
				<tr>
					<td><?= "{$employees[$i]['first_name']} {$employees[$i]['last_name']}" ?></td>
					<td>
						<ul>
							<?php for ($k = 0; $k < count($employees[$i]['skills']); $k++) : ?>
							<li><?= $employees[$i]['skills'][$k] ?></li>
							<?php endfor; ?>
						</ul>
					</td>
				</tr>
				<?php endfor; ?>
			</table>
		</div>
		<div>
			<table>
				<caption>foreach</caption>
				<tr>
					<th>Employees</th>
					<th>Skills</th>
				</tr>
				<?php foreach($employees as $employee) : ?>
				<tr>
					<td><?= "{$employee['first_name']} {$employee['last_name']}" ?></td>
					<td>
						<ul>
							<?php foreach ($employee['skills'] as $skills) : ?>
							<li><?= $skills ?></li>
							<?php endforeach; ?>
						</ul>
					</td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</body>
</html>