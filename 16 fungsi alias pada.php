<?php
$kendaraan = array('Mobil', 'Motor', 'Sepeda');
$upper = array_map(function($value) {
	return strtoupper($value);
}, $kendaraan);
echo '<pre>'; print_r($upper);
