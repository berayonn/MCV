<?php
// Bryan Nicholas 72210477
require_once('ModelRoti.php');
require_once('ControllerRoti.php');

$controller = new ControllerRoti();
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'daftar_roti';
}
switch ($action) {
    case 'daftar_roti':
        $controller->daftar_roti();
        break;
    case 'tambah_roti':
        $controller->tambah_roti();
        break;
    case 'proses_tambah_roti':
        $controller->proses_tambah_roti();
        break;
    case 'ubah_roti':
        $controller->ubah_roti();
        break;
    case 'proses_ubah_roti':
        $controller->proses_ubah_roti();
        break;
    case 'hapus_roti':
        $controller->hapus_roti();
        break;
    default:
        $controller->daftar_roti();
        break;
}
?>