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
                                <form name="guru" role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" value="<?php echo $t['nama']; ?>" class="form-control" id="nama" size="80" maxlength="250" />
                                        </div>
                                        <div class="form-group">
                                            <label>No KP</label>
                                            <input name="uname" type="text" class="form-control" id="uname" value="<?php echo $t['uname']; ?>" size="15" maxlength="12" readonly="readonly" />
                                            <i>Jika terdapat sebarang kesilapan hubungi Admin / WebTeam</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Jawatan</label>
                                            <select class="form-control" name="jawatan" value="<?php echo $t['jawatan']; ?>" id="jawatan" required>
                                                <option value="Guru Kelas">Guru Kelas</option>
                                                <option value="Penyelia Tingkatan">Penyelia Tingkatan</option>
                                                <option value="Pengetua">Pengetua</option>
                                                <option value="GK Koku">GK Koku</option>
                                                <option value="Pentadbir Sistem">Pentadbir Sistem</option>
                                            </select>
                                        </div>
                                        <td align="left" valign="top"><input name="id" type="hidden" id="id" value="<?php echo $t['uid']; ?>" />
                                        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="admkemaskini" />
                                        <input name="submit" type="submit" class="btn btn-danger" id="submit" value="admHapus" />
                                      <input name="Reset" type="reset" class="btn btn-warning" id="submit" value="Reset" />
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                                <label>Email</label>
                                                <input id="email" class="form-control" value="<?php echo $t['email']; ?>" placeholder="Enter Text">
                                                <i>Masukkan Yes ID Baharu atau pembetulan, jika tiada tinggalkan</i><br><br>
                                </div>
                                <?php
                                	  }
                                	  //jika tidak sah
                                	  else {
                                		  echo '<meta http-equiv="Refresh" content="0;url=daftar.php?menu=senarai">';
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
