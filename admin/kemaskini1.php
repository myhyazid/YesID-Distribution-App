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
                            	  $sm = "SELECT * FROM users 
                            	  	WHERE id = '" . input1($_GET['id']) . "'
                            	  ";
                            	  $dm = mysqli_query($GLOBALS["___mysqli_ston"], $sm);
                            	  //jika maklumat ada sah
                            		  $tk = mysqli_fetch_array($dm);
                            		  ?>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                     <label>Nama Penuh</label>
                                    <p class="form-control-static"><?php echo $tk['nama']; ?></p>
                                     <label>No Kp</label>
                                     <p class="form-control-static"><?php echo $tk['nokp']; ?></p>       
                    	        </div>	
                    	        <div class="col-lg-4">
                    	            <label>Yes ID</label>
                                     <p class="form-control-static"><?php echo $tk['yesid']; ?></p>
                    	            <label>Kelas</label>
                                     <p class="form-control-static"><?php echo $tk['kelas']; ?></p>
                    	        </div>
                    	        <div class="col-lg-4">
                    	        <label>YesPass</label>
                                     <p class="form-control-static"><?php if (isset($tk['yespass'])) { echo "Yes";} else if(empty($tk['yespass'])) { echo "No"; } ?></p>
                                <label>User Level</label> 
                                     <p class="form-control-static"><?php if (isset($tk['level'])) { echo "Pelajar"; } else { echo "Guru"; } ?></p>
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
                            Kemaskini Maklumat Pelajar
                        </div>
                    	<div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <?php
	  //semak maklumat adalah sah
	  $s = "SELECT * FROM users 
	  	WHERE id = '" . input1($_GET['id']) . "'
	  ";
	  $d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
	  //jika maklumat ada sah
	  if (mysqli_num_rows($d) == 1) {
		  $t = mysqli_fetch_array($d);
		  ?>
                                <form name="guru" action="daftar.php?menu=kemaskini" method="post">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $t['nama']; ?>" size="15" maxlength="200" />
                                        </div>
                                        <div class="form-group">
                                            <label>No KP</label>
                                            <input name="nokp" type="text" class="form-control" id="nokp" value="<?php echo $t['nokp']; ?>" size="15" maxlength="12" readonly="readonly" />
                                            <i>Jika terdapat sebarang kesilapan hubungi Admin / WebTeam</i>
                                        </div>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas">
                                                <option value="1S"<?php if ($t['kelas'] == "1S") { echo 'selected="selected"'; } ?>>1S</option>
                                                <option value="1T"<?php if ($t['kelas'] == "1T") { echo 'selected="selected"'; } ?>>1T</option>
                                                <option value="1J"<?php if ($t['kelas'] == "1J") { echo 'selected="selected"'; } ?>>1J</option>
                                                <option value="1O"<?php if ($t['kelas'] == "1O") { echo 'selected="selected"'; } ?>>1O</option>
                                                <option value="1H"<?php if ($t['kelas'] == "1H") { echo 'selected="selected"'; } ?>>1H</option>
                                                <option value="1N<?php if ($t['kelas'] == "1N") { echo 'selected="selected"'; } ?>">1N</option>
                                                <option value="1K"<?php if ($t['kelas'] == "1K") { echo 'selected="selected"'; } ?>>1K</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                                <label>Yes ID</label>
                                                <input name ="yesid"id="yesid" class="form-control" value="<?php echo $t['yesid']; ?>" placeholder="Enter Text">
                                                <i>Masukkan Yes ID Baharu atau pembetulan, jika tiada tinggalkan</i><br><br>
                                                <label>YesPass</label>
                                                <input name="yespass" id="yespass" type="password" class="form-control f1" value="<?php echo $t['yespass']; ?>" placeholder="Enter Text">
                                               <br>
                                                <i>Masukkan YesPass Baharu atau pembetulan, jika tiada tinggalkan</i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Kemaskini" />
                                         <input name="Reset" type="reset" class="button" id="submit" value="Reset" />
                                        <input name="submit" type="submit" class="btn btn-danger" id="submit" value="Hapus" />
                                    </form>
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
