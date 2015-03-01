<?php
$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", "Myhyazid211299")); //tukar ikut setting dbase
$dbase = ((bool)mysqli_query($conn, "USE froglp"));
if (!$dbase) { die("SILA HUBUNGI PENTADBIR SISTEM"); }
?>