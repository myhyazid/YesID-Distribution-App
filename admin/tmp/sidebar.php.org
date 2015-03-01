            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li <?=echoActiveClassIfRequestMatches("panel")?>>
                            <a href="panel.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    <br>
                        <li>
                            <a href="#"><i class="fa fa-gear"></i> Pengurusan Pelajar<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                        <li>
                            <a <?=echoActiveClassIfRequestMatches("daftar")?> href="daftar.php?menu=daftar"><i class="fa fa-edit fa-fw"></i>Daftar Pelajar</a>
                        </li>
                        <li>
                             <a <?=echoActiveClassIfRequestMatches("daftar")?> href="daftar.php?menu=senarai"><i class="fa fa-table fa-fw"></i> Senarai Pelajar</a>
                        </li>
                        <li>
                             <a <?=echoActiveClassIfRequestMatches("daftar.php?menu=senarai")?> href="daftar.php?menu=senarai"><i class="fa fa-edit fa-fw"></i> Kemaskini Maklumat Pelajar</a>
                        </li>
                        </ul>
                    <br>
                                            <?php
				if (isset($_SESSION['uadmin'])) {
					//jika user adalah admin
					if ($km['level'] == 1) {
						?>
                       <li>
                            <a href="#"><i class="fa fa-gear"></i> Administration Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                             <a <?=echoActiveClassIfRequestMatches("adminreg")?> href="admin.php?menu=daftar"><i class="fa fa-edit fa-fw"></i>Register New Administrator</a>
                        </li>
                        <li>
                             <a <?=echoActiveClassIfRequestMatches("adminreg")?> href="admin.php?menu=senarai"><i class="fa fa-edit fa-fw"></i>Administrator List</a>
                        </li>
                        <li>
                             <a <?=echoActiveClassIfRequestMatches("adminreg")?> href="admin.php?menu=senarai"><i class="fa fa-edit fa-fw"></i>Edit Administrator details</a>
                        </li>
                        <li>
                             <a <?=echoActiveClassIfRequestMatches("adminhis")?> href="adminhis.php"><i class="fa fa-history fa-fw"></i> Admins History</a>
                        </li>

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                                                <?php
					}
					?>
					<?php
					}
					?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            <!-- /.navbar-top-links -->
                        </div>
            <!-- /.navbar-static-side -->
        </nav>
