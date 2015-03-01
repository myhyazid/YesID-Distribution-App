<?php
//if(!isset($_SESSION)) { session_start(); }
//if(!isset($_SESSION["uadmin"]))
//{
//    header("Location: index.php");
//}
//include('inc/conn.php');
//include('inc/fungsi.php');
//include('tmp/header.php'); 
//include('tmp/sidebar.php'); 
?> 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Senarai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Senarai Pelajar Tingkatan 1 dan Yes Credentials
                        </div>
                    </div>
                        <!-- /.panel-heading -->
                            <div class="table">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Bil</th>
                                            <th>Nama Penuh</th>
                                            <th>No KP</th>
                                            <th>Katalaluan</th>
                                            <th>Kelas</th>
                                            <th>Yes ID</th>
                                            <th>Yes Pass</th>
                                            <th>kemaskini</th>
                                        </tr>
                                    </thead>
                                    <?php
                            		//select from table pelajar
                            		$s = "SELECT * FROM users
                            			ORDER BY nama ASC
                            		";
                            		$d = mysqli_query($GLOBALS["___mysqli_ston"], $s);
                            		$n = 0;
                            		while ($t = mysqli_fetch_array($d)) {
                            			$n = $n + 1;
                            			?>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $n; ?></td>
                                            <td><?php echo output1($t['nama']); ?></td>
                                            <td class="center"><?php echo output1($t['nokp']); ?></td>
                                            <td class="center"><?php if(empty($t['pass'])) { echo "Tiada"; } else { echo 'Ada'; } ?></td>
                                            <td class="center"><?php echo output1($t['kelas']); ?></td>
                                            <td class="center"><?php echo output1($t['yesid']); ?></td>
                                            <td class="center"><?php if(empty($t['yespass'])) { echo "Tiada"; } else { echo 'Ada'; } ?></td>
                                            <td class="center">
                        
                                                    <a href="daftar.php?menu=kemaskini&id=<?php echo $t['id']; ?>"><i class="fa fa-edit"></i> Kemaskini</a>
                                                
                                            </td>
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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>