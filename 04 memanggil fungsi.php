<?php
function report($bulan) {
	if ($bulan < 3) {
		return 'Report belum tersedia';
	} else {
		return 'Report sudah tersedia';
	}
}
