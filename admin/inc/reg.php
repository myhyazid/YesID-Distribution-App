<?php
//jika nilai nokp dan nama ada
if (empty($_POST['nokp']) || empty($_POST['nama'])) {
	?>
	<meta http-equiv="Refresh" content="2;url=daftar.php?menu=daftar">
	<div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
	<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
    <p>&nbsp;</p>
    <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
    <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
        Sila masukkan no kad pengenalan dan nama penuh.
    </b></font><p>&nbsp;</p></td></tr></table>
    <p>&nbsp;</p>
    </td></tr></table>
    </div>
    </div>
<?php
}
else {
	//jika delete
	if ($_POST['submit'] == "Hapus") {
		$s = "DELETE FROM users 
			WHERE id = '" . input1($_POST['id']) . "'
		";
		mysqli_query($GLOBALS["___mysqli_ston"], $s);
		?>
		<meta http-equiv="Refresh" content="2;url=daftar.php?menu=senarai">
        <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
        <p>&nbsp;</p>
        <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
        <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
            Maklumat Pelajar berjaya dihapuskan.
        </b></font><p>&nbsp;</p></td></tr></table>
        <p>&nbsp;</p>
        </td></tr></table>
	<?php
	}
	//jika kemaskini
	elseif ($_POST['submit'] == "Kemaskini") {
		//kemaskini guru dalam database
		$s = "UPDATE users SET
			kelas = '" . input1($_POST['kelas']) . "',
			nama = '" . input1($_POST['nama']) . "',
			yesid = '" . input1($_POST['yesid']) . "',
			yespass = '" . input1($_POST['yespass']) . "'
			WHERE id = '" . input1($_POST['id']) . "'
		";
		mysqli_query($GLOBALS["___mysqli_ston"], $s);
		?>
		<meta http-equiv="Refresh" content="2;url=daftar.php?menu=senarai">
		<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
		<p>&nbsp;</p>
		<table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
		<tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
			Maklumat Pelajar berjaya dikemaskini.
		</b></font><p>&nbsp;</p></td></tr></table>
		<p>&nbsp;</p>
		</td></tr></table>
	<?php
	}
	//jika daftar baru
	elseif ($_POST['submit'] == "Hantar") {
		//semak samada guru telah ada dalam database
		$s = "SELECT * FROM users
			WHERE nokp = '" . input1($_POST['nokp']) . "'
			ORDER BY nokp ASC
		";
		$d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
		//jika ada
		if (mysqli_num_rows($d) >= 1) {
			?>
            <meta http-equiv="Refresh" content="2;url=daftar.php?menu=daftar">
            <div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
            <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
            <p>&nbsp;</p>
            <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
            <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
                Maklumat Pelajar telah didaftarkan.
            </b></font><p>&nbsp;</p></td></tr></table>
            <p>&nbsp;</p>
            </td></tr></table>
            </div>
            </div>
         <?php
		}
		//jika tiada
		else {
			//insert guru baru dalam database
			$s = "INSERT INTO users SET
				level = '" . input1($_POST['level']) . "',
				nokp = '" . input1($_POST['nokp']) . "',
				pass = '" . input1($_POST['nokp']) . "',
				nama = '" . input1($_POST['nama']) . "',
				yesid = '" . input1($_POST['yesid']) . "',
				yespass = '" . input1($_POST['yespass']) . "',
				kelas = '" . input1($_POST['kelas']) . "'
			";
			mysqli_query($GLOBALS["___mysqli_ston"], $s);
			?>
            <meta http-equiv="Refresh" content="2;url=daftar.php?menu=senarai">
            <div id="page-wrapper">
<div class="row">
    <div class="col-lg-12">
           <!-- <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">-->
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <p>&nbsp;</p>
            <div class="alert alert-success" role="alert" padding="2" align="center">
         <!--   <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
            <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b> -->
                <b align="center">Maklumat Pelajar berjaya didaftarkan.
            </b></font></td></tr></table>
            <p>&nbsp;</p>
            </td></tr></table></div></div></div>
        <?php
		}
	}
	else {
		?>
        <meta http-equiv="Refresh" content="0;url=daftar.php?menu=senarai">
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