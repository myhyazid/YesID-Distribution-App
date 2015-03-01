<table width="100%" border="0" cellpadding="2" cellspacing="0">
  <tr>
    <td width="100%" align="center" valign="top">
      <table width="50%" border="0" cellspacing="10" cellpadding="10">
        <tr>
        <button type="button" class="btn btn-warning"><a href="pelajar.php?menu=daftar"></a>TAMBAH MAKLUMAT PELAJAR</button>
          <!--<td align="center" class="button">[ <a href="pelajar.php?menu=daftar">TAMBAH MAKLUMAT PELAJAR</a> ]</td>-->
        </tr>
      </table>
      <table width="100%" border="1" cellspacing="10" cellpadding="20">
        <tr>
          <td align="center" bgcolor="#49A3FF" class="tkmenu2">SENARAI PELAJAR</td>
        </tr>
      </table>
      <table class="table table-hover table-bordered">
      <thead>
       <tr> <!--width="100%" border="1" cellspacing="0" cellpadding="3" -->
          <!-- <td width="5%" align="center" valign="middle" bgcolor="#999999">Bil</td>
          <td width="30%" align="left" valign="middle" bgcolor="#999999">Nama Penuh</td>
          <td width="18%" align="center" valign="middle" bgcolor="#999999">No. Kad Pengenalan</td>
          <td width="23%" align="center" valign="middle" bgcolor="#999999">Jantina</td>
          <td width="12%" align="center" valign="middle" bgcolor="#999999">Angka Giliran</td>
          <td width="12%" align="center" valign="middle" bgcolor="#999999">Tindakan</td> -->
          <th class="text-center">Bil</th>
          <th class="text-center">Nama Penuh</th>
          <th class="text-center">No. KP</th>
          <th class="text-center">Jantina</th>
          <th class="text-center">No Ahli</th>
          <th class="text-center">Tindakan</th>
        </tr>
        </thead>
        <?php
		//select from table pelajar
		$s = "SELECT * FROM pelajar
			ORDER BY pnama ASC
		";
		$d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
		$n = 0;
		while ($t = mysqli_fetch_array($d)) {
			$n = $n + 1;
			?>
			<tbody>
            <tr>
              <td align="center" valign="top"><?php echo $n; ?></td>
              <td align="left" valign="top"><?php echo output1($t['pnama']); ?></td>
              <td align="center" valign="top"><?php echo output1($t['pnokp']); ?></td>
              <td align="center" valign="top"><?php echo output1($t['pjantina']); ?></td>
              <td align="center" valign="top"><?php if (!empty($t['pnogiliran'])) { echo output1($t['pnogiliran']); } else { echo "&nbsp;"; } ?></td>
              <td align="center" valign="top"><a href="pelajar.php?menu=kemaskini&id=<?php echo $t['pid']; ?>">KEMASKINI</a></td>
            </tr>
            </tbody>
        <?php
		}
		if (!$n) {
			?>
            <tr>
              <td colspan="6" align="center" valign="top">TIADA MAKLUMAT</td>
            </tr>
        <?php
		}
		?>
      </table>
    <br></td>
  </tr>
</table>
