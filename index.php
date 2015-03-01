<?php
if (!isset($_SESSION)) { session_start(); }
include('inc/conn.php');
include('inc/fungsi.php');
include('inc/recaptcha.php');
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SJI Yes ID Retrieval Application</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/halamanutama.css">
    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
<div class="jumbotron">
    <div class="container">
        <h2>Welcome to Yes ID Retrieval Application</h2>
        <i> Sila Log Masuk menggunakan namapengguna dan Kata Laluan yang diberikan </i><br>
    </div>
</div>
<div class="col-md-5">
      <?php
	  //jika dah login paparkan maklumat user
	  if (isset($_SESSION['users'])) {
		  ?>
		  <div class="panel panel-primary">
		    <div class="panel-heading"><span class="cnter">Selamat Datang <?php echo output1($tm['nama']); ?></span><br> </div>
                  <div class="panel-body"><span class="cnter"><b>Nama Pengguna :</b> <?php echo output1($tm['nama']); ?></span><br>
                	<b>Identiti Pengguna :</b> <?php echo output1($tm['nokp']) . "<br>" ."<b>Kelas : </b>". output1($tm['kelas']); ?><br><br>
                	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">
  Retrieve my ID
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Identity Verification</h4>
      </div>
      <div class="modal-body">
        <form method="post">
            <div class="g-recaptcha" data-sitekey="6LeyrP8SAAAAANWUJmUVvz8rCjcwCjACsTbkYGnY"></div>
            <input type="submit" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Dismiss</button>
      </div>
    </div>
  </div>
</div>
                	</div>
            </div>
      <?php
	  }
	  //jika belum login paparkan form login
	  else {
		  ?>
		          <div id="card"></div>
    <div class="login-card">
        <form class="form-signin" name="login" action="profil.php?menu=login" method="post">
            <label color="white">No KP</label>
            <!-- <input type="text" id="nokp"  placeholder="Nama Pengguna" required="yes" autofocus=""> -->
            <input name="nokp" type="text" class="" id="nokp" size="22" maxlength="12">
            <label>Password</label>
            <!-- <input type="Password" id="pass" class="form-control" placeholder="Kata Laluan" required="yes"> -->
            <input name="pass" type="password" class="" id="pass" size="22" maxlength="20">
            <i>Kata laluan anda adalah no KP anda</i><br>
            <button class="login login-submit" type="submit">Sign in</button>
    </div>
          <?php
	  }
	  ?>
</div>    

<div class="col-md-7">


    <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#terkini">Maklumat Terkini</a></li>
                  <li><a data-toggle="tab" href="#info">Info Tambahan</a></li>
                  <li><a data-toggle="tab" href="#hk">Hubungi Kami</a></li>
    </ul>

                <div class="tab-content">
                <?php
			//limit 10 berita terkini
			$sx = "SELECT * FROM info
			    WHERE category='latest'
			    ORDER by id DESC
			    Limit 1

			";
			$dx = mysqli_query($GLOBALS["___mysqli_ston"], $sx);
			
			//$dx = mysql_query($sx) or die(mysql_error().$sx);
			while ($tx = mysqli_fetch_array($dx)) {
				?>
                  <div class="tab-pane active" id="terkini">
                    <p><br><?php echo ucfirst(output2($tx['info'])); ?></p>
                  </div>
                                              <?php
			}
			?>

			                <?php
			                			//INFOTaMbaHAN
			//limit 10 berita terkini
			$infox = "SELECT * FROM info
			    WHERE category='infotambahan'
			    ORDER by id DESC
			    Limit 1

			";
			$datainfox = mysqli_query($GLOBALS["___mysqli_ston"], $infox);
			
			//$dx = mysql_query($sx) or die(mysql_error().$sx);
			while ($trx = mysqli_fetch_array($datainfox)) {
				?>
                  <div class="tab-pane" id="info">
                    <p><br><?php echo ucfirst(output2($trx['info'])); ?></p>
                  </div>
                   <?php
			}
			?>
                  <div class="tab-pane" id="hk">
                    <p><br>Untuk Sokongan atau bantuan penggunaan Aplikasi ini, sila hubungi : <br><br> SMK St. John WebTeam di <a href="mailto:webteam@stjohn.edu.my">webteam@stjohn.edu.my</a> atau <br>Yusry di <a href="mailto:muhammadyyazid@yes.my">muhammadyyazid@yes.my</a></p>
                  </div>
                </div>

    </div>
<footer class="footer">
    <div class="container">
        <p class="text-muted">© Copyright <?php echo date("Y"); ?> <a href="http://myhyazid.com">Myhyazid</a> , SMK St. John WebTeam</p>
    </div>
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

  </body>
</html>