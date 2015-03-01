        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kemaskini Maklumat Pelajar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Data / Student Information
                        </div>
                                                           <?php
                            	  //semak maklumat adalah sah
                            	  $st = "SELECT * FROM uadmin 
                            	  	WHERE id = '" . input1($_GET['id']) . "'
                            	  ";
                            	  $dt = mysqli_query($GLOBALS["___mysqli_ston"], $st);
                            	  //jika maklumat ada sah
                            		  $tt = mysqli_fetch_array($dt);
                            		  ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                     <label>Nama Penuh</label>
                                    <p class="form-control-static"><?php echo $tt['nama']; ?></p>
                                     <label>No Kp</label>
                                     <p class="form-control-static"><?php echo $tt['uname']; ?></p>       
                    	        </div>	
                    	        <div class="col-lg-4">
                    	            <label>Email</label>
                                     <p class="form-control-static"><?php echo $tt['email']; ?></p>
                    	            <label>Jawatan</label>
                                     <p class="form-control-static"><?php echo $tt['jawatan']; ?></p>
                    	        </div>
                    	        <div class="col-lg-4">
                    	        <label>Kata Laluan</label>
                                     <p class="form-control-static"><?php if (isset($tt['pass'])) { echo "Yes";} else if(empty($tt['yespass'])) { echo "No"; } ?></p>
                                <label>User Level</label> 
                                     <p class="form-control-static"><?php if (isset($tt['level'])) { echo "Pentadbir"; } else { echo "Guru"; } ?></p>
                    	        </div>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>    
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kemaskini Maklumat Pentadbir
                        </div>
                    	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                      <?php
	  //semak maklumat adalah sah
	  $s = "SELECT * FROM uadmin 
	  	WHERE id = '" . input1($_GET['id']) . "'
	  ";
	  $d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
	  //jika maklumat ada sah
	  if (mysqli_num_rows($d) == 1) {
		  $t = mysqli_fetch_array($d);
		  ?>
<form name="guru" action="admin.php?menu=kemaskini" method="post">
            <label>Nama</label>
            <input name="nama" type="text" value="<?php echo $t['nama']; ?>" class="input" id="nama" size="80" maxlength="250" />
            <label>No KP</label>
            <input name="nokp" type="text" class="form-control" id="nokp" value="<?php echo $t['uname']; ?>" size="15" maxlength="12" readonly="readonly" />
            <i>Jika terdapat sebarang kesilapan hubungi Admin / WebTeam</i><br>
              <div class="form-group">
                                            <label>Jawatan</label>
                                            <select class="form-control" name="jawatan" value="<?php echo $t['jawatan']; ?>" id="jawatan" required>
                                                <option value="5" <?php if ($t['jawatan'] == 5) { echo 'selected="selected"'; } ?>>Guru Kelas</option>
                                                <option value="4"<?php if ($t['jawatan'] == 4) { echo 'selected="selected"'; } ?>>Penyelia Tingkatan</option>
                                                <option value="3"<?php if ($t['jawatan'] == 3) { echo 'selected="selected"'; } ?>>Pengetua</option>
                                                <option value="2"<?php if ($t['jawatan'] == 2) { echo 'selected="selected"'; } ?>>GK Koku</option>
                                                <option value="1"<?php if ($t['jawatan'] == 1) { echo 'selected="selected"'; } ?>>Pentadbir Sistem</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                                <label>Email</label>
                                                <input name="email" type="text" value="<?php echo $t['email']; ?>" class="form-control" id="email" size="80" maxlength="250" />
                                                <i>Masukkan Yes ID Baharu atau pembetulan, jika tiada tinggalkan</i><br><br>
                                                <label>User Access</label>
                                                <select name="level" class="form-control" id="level">
                                        <option value="1" <?php if ($t['level'] == 1) { echo 'selected="selected"'; } ?>>PENTADBIR</option>
                                        <option value="2" <?php if ($t['level'] == 2) { echo 'selected="selected"'; } ?>>GURU</option>
                                      </select>
                                </div>
                                <div class="col-lg-12">
        <i>Katalaluan bagi pendaftaran baru adalah sama dengan no. kad pengenalan</i>
            <br>
            
              <td align="right" valign="top" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="top"><input name="id" type="hidden" id="id" value="<?php echo $t['id']; ?>" />
                <input name="submit" type="submit" class="btn btn-primary" id="submit" value="kemaskini" />
                <input name="submit" type="submit" class="btn btn-danger" id="submit" value="Hapus" />
              <input name="Reset" type="reset" class="btn btn-warning" id="submit" value="Reset" /></td>
            </tr>
          </table>
          </form>
      <?php
	  }
	  //jika tidak sah
	  else {
		  echo '<meta http-equiv="Refresh" content="0;url=admin.php?menu=senarai">';
	  }
	  ?>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
