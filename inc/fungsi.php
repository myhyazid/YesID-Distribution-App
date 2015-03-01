<?php
//security input
function semakSlash($input) {
    if(!get_magic_quotes_gpc()) {
        $input = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $input);
    }
    return $input;
}

//semua input huruf besar
function input1($str) {
    $str = htmlentities(strtoupper(trim(semakSlash($str))));
    return $str;
}

function input2($str) {
    $str = htmlentities(trim(semakSlash($str)));
    return $str;
}

//semua output huruf besar
function output1($str) {
    if(!get_magic_quotes_gpc()) {
        $str = stripslashes($str);
    }
    return $str;
}

function output2($str) {
    if(!get_magic_quotes_gpc()) {
        $str = html_entity_decode(stripslashes($str));
    }
    return html_entity_decode($str);
}

//fetchkan maklumat user yg login tadi
if (!empty($_SESSION['users'])) {
    $sm = "SELECT * FROM users
        WHERE nokp = '" . input1($_SESSION['users']) . "'
        ORDER BY nokp ASC
    ";
    $dm = mysqli_query($GLOBALS["___mysqli_ston"], $sm);
    $tm = mysqli_fetch_array($dm);
}
//fetchkan maklumat admin yg login tadi
if (!empty($_SESSION['uadmin'])) {
    $jm = "SELECT * FROM uadmin
        WHERE uname = '" . input1($_SESSION['uadmin']) . "'
        ORDER BY uname ASC
    ";
    $im = mysqli_query($GLOBALS["___mysqli_ston"], $jm);
    $km = mysqli_fetch_array($im);
}

//gred markah
function gred($markah) {
    if ($markah > 79) { return "A"; }
    elseif ($markah > 59) { return "B"; }
    elseif ($markah > 39) { return "C"; }
    elseif ($markah > 19) { return "D"; }
    else { return "E"; }    
}
?>
<?php 

//basename .php
function echoActiveClassIfRequestMatchesPHP($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
function initCounter() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql = "INSERT INTO IPAddr (UID, IP_Address) VALUES ('$id', '$ip')";
    mysqli_query($GLOBALS["___mysqli_ston"], $sql);
}
//info Latest

?>