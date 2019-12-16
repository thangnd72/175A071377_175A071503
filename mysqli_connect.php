<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'Thang0975346755'); 
DEFINE ('DB_HOST', '127.0.0.1');
DEFINE ('DB_NAME', 'QLD');

// Make the connection:
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Set the encoding...optional but recommended
mysqli_set_charset($conn, 'utf8');
