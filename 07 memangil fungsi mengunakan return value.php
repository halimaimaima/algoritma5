<?php
function report($bulan) {
	if ($bulan < 3) {
		$status = 'Report belum tersedia';
	} else {
		$status = 'Report sudah tersedia';
	}
	return $status;
}
echo report(2); // Hasil Report belum tersedia
