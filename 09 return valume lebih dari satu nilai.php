<?php
function nama_bulan($bulan) {
	<?php
$nama_bulan = array (1 => 'Januari', 2 => 'Februari', 3 => 'Maret');
	$semester 	= $bulan < 7 ? 1 : 2;
	return array('bulan' => $nama_bulan[$bulan],'semester' => $semester);
}
$bulan = nama_bulan(3);
echo '<pre>'; print_r($bulan);
/* HASIL:
Array
(
    [bulan] => Maret
    [semester] => 1
)*/
