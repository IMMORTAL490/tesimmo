<?php
	include "lokasi.php";
    date_default_timezone_set("Asia/Jakarta");
    $waktu=date("d-M-Y H:i:s");
    $pesan="Ada yang mengakses website (".$lokasi.") pada ".$waktu;
	if ($idCountry == "ID") {
        include "sendMessage.php";
	}
?>