<?php
if (!isset($_SESSION)) { session_start(); }
include('inc/conn.php');
include('inc/fungsi.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SJI Yes ID Retrieval Application</title>
<link rel="stylesheet" href="css/vcard.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">SJI Yes ID Retrieval Application</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?=echoActiveClassIfRequestMatchesPHP("index")?>><a href="index.php">Utama <span class="sr-only">(current)</span></a></li>
                    <!-- <li><a href="kalendar.php" onmouseover="mopen('m5')" onmouseout="mclosetime()">Kalendar</a></li> -->
              
        <li <?=echoActiveClassIfRequestMatchesPHP("manual")?>><a href="/eGKK/manual.php">Manual Pengguna</a></li>
        
                
      </ul>

      <ul class="nav navbar-nav navbar-right">
      <?php
				//jika dah login
				if (isset($_SESSION['users'])) {
					?>
        <li><a href="profil.php?menu=logout">Log Keluar</a></li>
                <?php
				}
				?>
      </ul>
    <ul class="nav navbar-nav navbar-right">
        <li <?=echoActiveClassIfRequestMatchesPHP("bantuan")?>><a href="bantuan.php">Bantuan</a></li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="card">
    <div id="card-logo"></div>
    <h3>Yes ID Details</h3>
</div>
<div id="card-body">
    <div class="col-md-12">
        <h3> Nama Penuh : <?php echo $tm['nama']; ?></h3>
    </div>
    <br>
    <div class="col-md-6">
    <p> Kelas       : <br><?php echo $tm['kelas']; ?></p>
    <p> No KP      :<br> <?php echo $tm['nokp']; ?></p>
    </div>
    <div class="cold-md-6">
    <p> Yes ID     : <br><?php echo $tm['yesid']; ?></p>
    <p> YesPass : <br><?php echo $tm['yespass']; ?></p>
    </div>
    <br>
    <br>
    <hr style="color:#60A9DD;background-color:#60A9DD;height:2px;width:90%;border:none;" />
    <div id="card-parents">
        <div class="col-md-5">
        Parents? Get your ID Now.
        <br>
        <!-- Button trigger modal -->
        <br>
<button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal">
  Get my ID now >
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Parents Yes ID</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-12">
    <h4><strong> Ayah / Father's</strong></h4>
    </div>
            <div class="col-md-6">
    <p> Yes ID     : <?php echo $tm['dadyesid']; ?></p>
    </div>
    <div class="cold-md-6">
    <p> YesPass : <?php echo $tm['dadyespass']; ?></p>
    </div>
    <div class="col-md-12">
    <h4><strong> Ibu / Mother's</strong></h4>
    </div>
            <div class="col-md-6">
    <p> Yes ID     : <?php echo $tm['momyesid']; ?></p>
    </div>
    <div class="cold-md-6">
    <p> YesPass : <?php echo $tm['momyespass']; ?></p>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        </div>
        <div class="col-md-1">
        <hr style="color:#60A9DD;background-color:#60A9DD;height:50px;width:1px;border:none;" />
        </div>
        <div class="col-md-5">
        Activate your ID!
        <br>
        <br>
        <!-- Button trigger modal -->
        <a href="https://www.yes.my/activation/loadMOEActivation.do?lang=en" class="btn btn-primary" role="button">Activate my ID and start Frogging! ></a>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>