<?php
/**
 * Plugin Name: Kondisi Fisik Bahan Pustaka Untuk SLiMS
 * Plugin URI: -
 * Description: Plugins kondisi fisik bahan pustaka dan laporan kondisi fisik bahan pustaka untuk SLIMS
 * Version: 1.0.0
 * Author: -
 * Author URI: -
 */
use SLiMS\Plugins;

$plugin = Plugins::getInstance();

Plugins::getInstance()->registerAutoload(__DIR__);


$pathKondisiFisikBahanPustaka = __DIR__ . '/pages/kondisi_fisik_bahan_pustaka.php';
$pathRekapitulasiKondisiFisikBahanPustaka = __DIR__ . '/pages/rekapitulasi_kondisi_fisik_bahan_pustaka.php';
$pathStatistikKondisiFisikBahanPustaka = __DIR__ . '/pages/statistik_kondisi_fisik_bahan_pustaka.php';
//$path =  __DIR__ . '/pages/inventarisasi.php';
 // Make default group menu

Plugins::group('Survey Koleksi Perpustakaan', function() use($pathKondisiFisikBahanPustaka, $pathRekapitulasiKondisiFisikBahanPustaka) {
            // Scan all file inside module directory as menu
 Plugins::menu('reporting', 'Daftar Kondisi Fisik Bahan Pustaka', $pathKondisiFisikBahanPustaka);
 Plugins::menu('reporting', 'Rekapitulasi Kondisi Fisik Bahan Pustaka', $pathRekapitulasiKondisiFisikBahanPustaka);

});


Plugins::group('Survey Koleksi Perpustakaan', function() use($pathStatistikKondisiFisikBahanPustaka) {
            // Scan all file inside module directory as menu
  Plugins::menu('reporting', 'Statistik Kondisi Fisik Bahan Pustaka', $pathStatistikKondisiFisikBahanPustaka);
});