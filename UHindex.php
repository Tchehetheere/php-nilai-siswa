<?php
echo "<h1 align = center>ULANGAN HARIAN WEB SOAL 1</h1>";
echo "<p align = center>Daftar Nilai PTS</p>";



$siswa=[
	["Ari", "79", "62", "56"],
	["Benny", "82", "97", "78"],
	["Dicky", "67", "72", "97"],
	["Dimas", "90", "79", "83"],
	["Zaky", "86", "89", "80"],
	["Zaku", "89", "100", "80"],
	["Ghufroon", "100", "89", "100"]
];

$n= count($siswa);
$no= 1; 



?>

<br><br><br><br><br>
<table border=1 align=center cellspacing="0" cellpadding="20" width="700">
	<tr>
	<th rowspan="2">NO.</th>
	<th rowspan="2">Nama Siswa</th>
	<th colspan="3">Nilai</th>
	</tr>
	<tr>

	<th>LKA</th>
	<th>IKA</th>
	<th>SIOT</th>
	</tr>




	<?php foreach($siswa as $s):?>
	<tr>
			<td><?php echo $no++; ?></td>
			<td><?= $s[0]; ?></td>
			<td><?= $s[1]; ?></td>
			<td><?= $s[2]; ?></td>
			<td><?= $s[3]; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<p align=center>Farrel Sayidina Reyes</p>