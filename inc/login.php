<?php
if (isset($_SESSION['users'])) {
	?>
	<meta http-equiv="Refresh" content="2;url=index.php">
	<br><br>
	<div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-success" role="alert">
    <strong>Anda telah daftar masuk.</strong><p> Anda akan dibawa ke halaman utama sebentar lagi.</p>
    </div>
</div>
<div class="col-md-2"><br></div>

<?php
}
else {
	if (empty($_POST['nokp']) || empty($_POST['pass'])) {
		?>
		<meta http-equiv="Refresh" content="2;url=index.php">
		<br><br>
        	<div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-danger" role="alert">
    <strong>Amaran</strong><p> Sila masukkan No. Kad Pengenalan dan katalaluan yang betul.</p>
    </div>
</div>
<div class="col-md-2"><br></div>
	<?php
	}
	else {
		$s = "SELECT * FROM users
			WHERE nokp = '" . input1($_POST['nokp']) . "' 
			AND pass = '" . input2($_POST['pass']) . "' 
		";
		$d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
		if (mysqli_num_rows($d) == 1) {
			$t = mysqli_fetch_array($d);
			$_SESSION['users'] = $t['nokp']; //daftar session pengguna
			
		$id = $t['id'];
        $id = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $id);
		$lts = "UPDATE users SET LoggedIn = NOW() WHERE id = $id";
		mysqli_query($GLOBALS["___mysqli_ston"], $lts);
		initCounter()
			?>
			<meta http-equiv="Refresh" content="2;url=index.php">
			<br><br>
            <div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-success" role="alert">
    <strong align="center">Selamat datang <?php echo ucwords(strtolower(output1($t['nama']))); ?> !!</strong><p> Anda akan dibawa ke halaman utama sebentar lagi.</p>
    </div>
</div>
<div class="col-md-2"><br></div>
		<?php
		}
		else {
			?>
            <meta http-equiv="Refresh" content="2;url=index.php">
            <br><br>
            <div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-danger" role="alert">
    <strong>Wrong Password</strong><p> Please insert the correct password and try again.</p>
    </div>
</div>
<div class="col-md-2"><br></div>
		<?php
		}
	}
}
?>