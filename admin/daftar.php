<?php
if (!isset($_SESSION)) { session_start(); }
include('inc/conn.php');
include('inc/fungsi.php');
include('tmp/header.php');
include('tmp/sidebar.php');

//menu ini hanya bole diakses oleh admin sahaja  //&& $tm['level'] == 1)
if (isset($_SESSION['uadmin'])) {
	if (!empty($_GET['menu'])) {
		switch($_GET['menu']) {
			case "senarai":
				include('senarai.php');
				break;
	
			case "daftar":
				if (!empty($_POST['nokp']) && !empty($_POST['nama'])) {
					include('inc/reg.php');
				}
				else {
					include('daftarpel.php');
				}
				break;
	
			case "kemaskini":
				if (!empty($_POST['nokp']) && !empty($_POST['nama'])) {
					include('inc/reg.php');
				}
				else {
					include('kemaskini.php');
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