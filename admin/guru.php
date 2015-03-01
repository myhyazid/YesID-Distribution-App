<?php
if (!isset($_SESSION)) { session_start(); }
include('inc/conn.php');
include('inc/fungsi.php');
include('tmp/header.php');
//menu ini hanya bole diakses oleh admin sahaja
if (isset($_SESSION['uadmin']) && $km['level'] == 1) {
	if (!empty($_GET['menu'])) {
		switch($_GET['menu']) {
			case "senarai":
				include('tmp/guru_senarai.php');
				break;
	
			case "daftar":
				if (!empty($_POST['nokp']) && !empty($_POST['nama'])) {
					include('inc/guru_daftar.php');
				}
				else {
					include('tmp/guru_daftar.php');
				}
				break;
	
			case "kemaskini":
				if (!empty($_POST['nokp']) && !empty($_POST['nama'])) {
					include('inc/guru_daftar.php');
				}
				else {
					include('tmp/guru_kemaskini.php');
				}
				break;
	
			default:
				echo '<meta http-equiv="Refresh" content="0;url=index.php">';
				break;
		}
	}
	else {
		echo '<meta http-equiv="Refresh" content="0;url=index.php">';
	}
}
//jika belum login @ bukan admin
else {
	echo '<meta http-equiv="Refresh" content="0;url=index.php">';
}
include('tmp/footer.php');
?>