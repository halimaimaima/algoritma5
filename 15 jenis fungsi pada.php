<?php
$kendaraan 	= array('Mobil', 'Motor', 'Sepeda');
$upper 		= array_map('toupper', $kendaraan);
function toupper($array_val) {
	return strtoupper($array_val);
}
echo '<pre>'; print_r($upper);
