<?php
//jika nilai nokp dan nama ada
if (empty($_POST['nokp']) || empty($_POST['nama'])) {
	?>
	<meta http-equiv="Refresh" content="2;url=guru.php?menu=daftar">
	<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
    <p>&nbsp;</p>
    <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
    <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
        Sila masukkan no kad pengenalan dan nama penuh.
    </b></font><p>&nbsp;</p></td></tr></table>
    <p>&nbsp;</p>
    </td></tr></table>
<?php
}
else {
	//jika delete
	if ($_POST['submit'] == "Hapus") {
		$s = "DELETE FROM uadmin 
			WHERE id = '" . input1($_POST['id']) . "'
		";
		mysqli_query($GLOBALS["___mysqli_ston"], $s);
		?>
		<meta http-equiv="Refresh" content="2;url=profkem.php">
        <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
        <p>&nbsp;</p>
        <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
        <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
            Maklumat guru berjaya dihapuskan.
        </b></font><p>&nbsp;</p></td></tr></table>
        <p>&nbsp;</p>
        </td></tr></table>
	<?php
	}
	//jika kemaskini
	elseif ($_POST['submit'] == "kemaskini") {
		//kemaskini guru dalam database
		$s = "UPDATE uadmin SET
			nama = '" . input1($_POST['nama']) . "',
			email = '" . input1($_POST['email']). "',
			WHERE id = '" . input1($_POST['id']) . "'
		";
		mysqli_query($GLOBALS["___mysqli_ston"], $s);
		?>
		<meta http-equiv="Refresh" content="2;url=profkem.php">
		<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
		<p>&nbsp;</p>
		<table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
		<tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
			Maklumat guru berjaya dikemaskini.
		</b></font><p>&nbsp;</p></td></tr></table>
		<p>&nbsp;</p>
		</td></tr></table>
	<?php
	}
	//jika daftar baru
	elseif ($_POST['submit'] == "Hantar") {
		//semak samada guru telah ada dalam database
		$s = "SELECT * FROM uadmin
			WHERE uname = '" . input1($_POST['nokp']) . "'
			ORDER BY uname ASC
		";
		$d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
		//jika ada
		if (mysqli_num_rows($d) >= 1) {
			?>
            <meta http-equiv="Refresh" content="2;url=admin.php?menu=daftar">
            <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
            <p>&nbsp;</p>
            <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
            <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
                Maklumat guru telah didaftarkan.
            </b></font><p>&nbsp;</p></td></tr></table>
            <p>&nbsp;</p>
            </td></tr></table>
        <?php
		}
	}
	else {
		?>
        <meta http-equiv="Refresh" content="0;url=admin.php?menu=senarai">
		<table width="995" cellspacing="0" cellpadding="2" border="0"><tr><td height="400" align="center" valign="middle" bgcolor="#FFDFA3">
		<p>&nbsp;</p>
		<table border="1" width="450" align="center" cellspacing="1" cellpadding="10" bgcolor="#F1F3F5" bordercolor="#CCCCCC">
		<tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>&nbsp;</b></font><p>&nbsp;</p></td></tr></table>
		<p>&nbsp;</p>
		</td></tr></table>
	<?php
	}
}
?>