<?php
header('refresh: 10; url=index.php');
?>
<html>
<head>
<script src='css/nprogress.js'></script>
<link rel='stylesheet' href='css/nprogress.css'/>
<link rel='stylesheet' href='css/halamanutama.css'/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="col-md-2"><br></div>
<div class="col-md-8">
    <div class="alert alert-danger" role="alert">
    <strong>Validation Failed.</strong><p> You're robot. If you think this is a mistake please take the captcha test again.</p>
        <i><strong>Redirecting you to the main page in 10 Seconds</strong></i>
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