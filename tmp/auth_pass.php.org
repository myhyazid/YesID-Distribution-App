<?php
header('refresh: 10; url=VCard.php');
include('tmp/header.php')
?>

<body>
<br>
<div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-success" role="alert">
    <strong>Validation success.</strong><p> You're now being redirected to your Yes ID VCard</p>
    </div>
</div>
<div class="col-md-2"><br></div>
<script>
NProgress.start();
NProgress.set(0.6);
NProgress.inc(0.3); 
</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
     <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
</body>
</html>