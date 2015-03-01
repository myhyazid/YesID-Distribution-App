<?php
if (isset($_SESSION['uadmin'])) {
	?>
	<meta http-equiv="Refresh" content="2;url=panel.php">
	<table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
    <p>&nbsp;</p>
    <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
    <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
        Anda telah daftar masuk.<br />Anda akan dibawa ke halaman utama sebentar lagi.
    </b></font><p>&nbsp;</p></td></tr></table>
    <p>&nbsp;</p>
    </td></tr></table>
<?php
}
else {
	if (empty($_POST['uname']) || empty($_POST['pass'])) {
		?>
		<meta http-equiv="Refresh" content="2;url=index.php">
        <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
        <p>&nbsp;</p>
        <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
        <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
            Sila masukkan No. Kad Pengenalan dan katalaluan yang betul.
        </b></font><p>&nbsp;</p></td></tr></table>
        <p>&nbsp;</p>
        </td></tr></table>
	<?php
	}
	else {
		$j = "SELECT * FROM uadmin
			WHERE uname = '" . input1($_POST['uname']) . "' 
			AND pass = '" . input2($_POST['pass']) . "'
		";
		$i = mysqli_query($GLOBALS["___mysqli_ston"], $j);
		if (mysqli_num_rows($i) == 1) {
			$k = mysqli_fetch_array($i);
			$_SESSION['uadmin'] = $k['uname']; //daftar session pengguna
			
		$id = $k['id'];
        $id = ((isset($GLOBALS["___mysqli_ston"]) && is_object($GLOBALS["___mysqli_ston"])) ? mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id) : ((trigger_error("[MySQLConverterToo] Fix the mysql_escape_string() call! This code does not work.", E_USER_ERROR)) ? "" : ""));
		$lts = "UPDATE uadmin SET LoggedIn = NOW() WHERE id = $id";
		mysqli_query($GLOBALS["___mysqli_ston"], $lts);
			?>
			<meta http-equiv="Refresh" content="2;url=panel.php">
            <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
            <p>&nbsp;</p>
            <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
            <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
				Selamat datang <?php echo ucwords(strtolower(output1($k['nama']))); ?> !!<br />Anda akan dibawa ke halaman utama sebentar lagi.            </b></font><p>&nbsp;</p></td></tr></table>
            <p>&nbsp;</p>
            </td></tr></table>
		<?php
		}
		else {
			?>
            <meta http-equiv="Refresh" content="2;url=index.php">
            <table width="100%" cellspacing="0" cellpadding="2" border="0"><tr><td height="250" align="center" valign="middle">
            <p>&nbsp;</p>
            <table border="1" width="450" align="center" cellspacing="0" cellpadding="10" class="table2">
            <tr><td align="center" valign="middle"><p>&nbsp;</p><font color="red"><b>
                Maaf !! Katalaluan anda salah.<br />Sila cuba sekali lagi.
            </b></font><p>&nbsp;</p></td></tr></table>
            <p>&nbsp;</p>
            </td></tr></table>
		<?php
		}
	}
}
?>