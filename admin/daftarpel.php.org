        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Daftar Pelajar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sila lengkapkan ruang di bawah. Kata Laluan bagi setiap pelajar adalah No KP mereka.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="daftar.php?menu=daftar" method="post">
                                            <label>Nama Penuh</label>
                                            <input name="nama"  class="form-control" id="nama" placeholder="Enter text" required>
                                            <label>No KP (username)</label>
                                            <input name="nokp"  class="form-control" id="nokp" placeholder="Enter text" required>
                                            <label>Yes ID</label>
                                            <input name="yesid"  class="form-control" id="yesid" placeholder="Enter text" required>
                                            <label>Yes Pass</label>
                                            <input name="yespass" type="password" class="form-control f1" id="yespass" placeholder="Enter password" required>
                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <select class="form-control" name="kelas" id="kelas" required>
                                                <option value="1S">1S</option>
                                                <option value="1T">1T</option>
                                                <option value="1J">1J</option>
                                                <option value="1O">1O</option>
                                                <option value="1H">1H</option>
                                                <option value="1N">1N</option>
                                                <option value="1K">1K</option>
                                            </select>
                                        </div>
                                                                                <div class="form-group">
                                            <label>Access Level</label>
                                            <select class="form-control" name="level" id="level" required>
                                                <option value="1">Pelajar</option>
                                                <option value="2">Guru</option>
                                            </select>
                                        </div>
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
        <li>Please check and make sure that No KP/NRIC is correct (This is important, you can't change this later)</li>
        <li>Please check and make sure that YesPass is correct (This is important)</li>
        <li>Please make sure that all data inserted is correct</li><br>
        If you think all data is correct, you can press Submit button now! GodSpeed!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input name="submit" type="submit" class="btn btn-success" id="submit" value="Hantar" />
      </div>
    </div>
  </div>
</div>
                                        <button type="reset" id="reset" value="Reset" class="btn btn-warning">Reset Button</button>
                                        
                                            </span>
                                        </div>
                                    </form>
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
