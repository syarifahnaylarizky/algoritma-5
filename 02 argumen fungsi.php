<?php
// Tanpa argumen

function nama_bulan($agustus): void {
	echo 'Agustus';
}
nama_bulan(); // Hasil Agustus
function nama_bulan($agustus) {
	echo $agustus;
}
nama_bulan(bulan: 'agustus', tahun: 2016); // Hasil agustus 2018

argumen fungsi