<?php
// Path to the log file
$file = 'ip_log.txt';

// Get the IP address of the client
$ip = $_SERVER['REMOTE_ADDR'];

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Format the log entry
$entry = "$date - $ip\n";

// Append the log entry to the file
file_put_contents($file, $entry, FILE_APPEND);

// Serve the tracking image
header('Content-Type: image/png');
readfile('tracking_image.png');
?>
