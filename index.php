<?php
// Mengetahui IP Pengunjung
function get_client_ip() {
    $ip_user=$_SERVER['REMOTE_ADDR'];
}
   echo "IP anda adalah : ". get_client_ip()."<br>";
?>
