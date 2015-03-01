        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pendaftaran Pentadbir</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sila lengkapkan ruang di bawah. Kata Laluan bagi setiap pengguna adalah No KP mereka.
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="admin.php?menu=daftar" method="post">
                                            <label>Nama Penuh</label>
                                            <input name="nama"  class="form-control" id="nama" placeholder="Enter text" required>
                                            <label>No KP (username)</label>
                                            <input name="nokp"  class="form-control" id="nokp" placeholder="Enter text" required>
                                            <label>Yes ID / Email</label>
                                            <input name="email"  class="form-control" id="email" placeholder="Enter text" required>
                                        <div class="form-group">
                                            <label>Jawatan</label>
                                            <select class="form-control" name="jawatan" id="jawatan" required>
                                                <option value="5">Guru Kelas</option>
                                                <option value="4">Penyelia Tingkatan</option>
                                                <option value="3">Pengetua</option>
                                                <option value="2">GK Koku</option>
                                                <option value="1">Pentadbir Sistem</option>
                                            </select>
                                        </div>
                                                                                <div class="form-group">
                                            <label>Access Level</label>
                                            <select class="form-control" name="level" id="level" required>
                                                <option value="1">Pentadbir</option>
                                                <option value="2">Guru</option>
                                            </select>
                                        </div>
                                        <button type="submit" name="submit" id="submit" value="Hantar" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" id="reset" value="Reset" class="btn btn-danger">Reset Button</button>
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
