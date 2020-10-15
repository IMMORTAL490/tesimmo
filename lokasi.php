<?php
    require_once('geoplugin.class.php');
    $geoplugin = new geoPlugin();
    $geoplugin->locate();
    $lokasi="{$geoplugin->ip}/{$geoplugin->city}/{$geoplugin->countryCode}"; 
    $idCountry="{$geoplugin->countryCode}";
?>