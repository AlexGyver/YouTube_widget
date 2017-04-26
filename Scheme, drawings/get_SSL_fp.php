<?php
$g = stream_context_create (array("ssl" => array("capture_peer_cert" => true)));
$r = stream_socket_client("ssl://www.googleapis.com:443", $errno, $errstr, 30,
STREAM_CLIENT_CONNECT, $g);
$cont = stream_context_get_params($r);
$cert_x = $cont["options"]["ssl"]["peer_certificate"];
openssl_x509_export($cont["options"]["ssl"]["peer_certificate"], $output);
$output = str_replace('-----BEGIN CERTIFICATE-----', '', $output);
$output = str_replace('-----END CERTIFICATE-----', '', $output);
$output = base64_decode($output);
$fingerprint = sha1($output);
$fp_up = strtoupper($fingerprint);
$fp_spliited = str_split($fp_up, 2);
$fp_for_arduino = implode(':', $fp_spliited);
echo $fp_for_arduino;
?>