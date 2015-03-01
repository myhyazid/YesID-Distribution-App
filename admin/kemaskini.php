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
                            	  $st = "SELECT * FROM users 
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
                                     <p class="form-control-static"><?php echo $tt['nokp']; ?></p>       
                    	        </div>	
                    	        <div class="col-lg-4">
                    	            <label>Yes ID</label>
                                     <p class="form-control-static"><?php echo $tt['yesid']; ?></p>
                    	            <label>Kelas</label>
                                     <p class="form-control-static"><?php echo $tt['kelas']; ?></p>
                    	        </div>
                    	        <div class="col-lg-4">
                    	        <label>YesPass</label>
                                     <p class="form-control-static"><?php if (isset($tt['yespass'])) { echo "Yes";} else if(empty($tt['yespass'])) { echo "No"; } ?></p>
                                <label>User Level</label> 
                                     <p class="form-control-static"><?php if (isset($tt['level'])) { echo "Pelajar"; } else { echo "Guru"; } ?></p>
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
	  $s = "SELECT * FROM users 
	  	WHERE id = '" . input1($_GET['id']) . "'
	  ";
	  $d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
	  //jika maklumat ada sah
	  if (mysqli_num_rows($d) == 1) {
		  $t = mysqli_fetch_array($d);
		  ?>
<form name="guru" action="daftar.php?menu=kemaskini" method="post">
            <label>Nama</label>
            <input name="nama" type="text" value="<?php echo $t['nama']; ?>" class="form-control" id="nama" size="80" maxlength="250" />
            <label>No KP</label>
            <input name="nokp" type="text" class="form-control" id="nokp" value="<?php echo $t['nokp']; ?>" size="15" maxlength="12" readonly="readonly" />
            <i>Jika terdapat sebarang kesilapan hubungi Admin / WebTeam</i><br>
              <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" value="<?php echo $t['kelas']; ?>" id="kelas" required>
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
                                                <input name="yesid" type="text" value="<?php echo $t['yesid']; ?>" class="form-control" id="yesid" size="80" maxlength="250" />
                                                <i>Masukkan Yes ID Baharu atau pembetulan, jika tiada tinggalkan</i><br><br>
                                                <label>Yes Pass</label>
                                                <input name="yespass" type="text" value="<?php echo $t['yespass']; ?>" class="form-control f1" id="yespass" size="80" maxlength="250" />
                                                <i>Masukkan Yes ID Baharu atau pembetulan, jika tiada tinggalkan</i><br><br>
                                </div>
                                <div class="col-lg-12">
        <i>Katalaluan bagi pendaftaran baru adalah sama dengan no. kad pengenalan</i>
            <br>
            
              <td align="right" valign="top" bgcolor="#CCCCCC">&nbsp;</td>
              <td align="left" valign="top"><input name="id" type="hidden" id="id" value="<?php echo $t['id']; ?>" />
              <!-- Submit Confirmation -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Submit
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to proceed?</h4>
      </div>
      <div class="modal-body">
        There's a few things you must check before you submit this data.Once you submit it you cannot edit it again.Please refer below :
        <br>
        <br>
        <li>Please check and make sure that YesPass is correct (This is important)</li>
        <li>Please make sure that all data inserted is correct</li><br>
        If you think all data is correct, you can press Submit button now! GodSpeed!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input name="submit" type="submit" class="btn btn-success" id="submit" value="Kemaskini" />
      </div>
    </div>
  </div>
</div>
                <!-- Delete Danger Warning -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure to proceed?</h4>
      </div>
      <div class="modal-body">
        If you proceed, you may lost all the student data and it cannot be trace back/retrieved back. Please Proceed with caution.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input name="submit" type="submit" class="btn btn-danger" id="submit" value="Hapus" />
      </div>
    </div>
  </div>
</div>
              <input name="Reset" type="reset" class="btn btn-warning" id="submit" value="Reset" /></td>
            </tr>
          </table>
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
