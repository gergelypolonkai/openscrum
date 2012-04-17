<?php
if (!in_array(@$_SERVER['REMOTE_ADDR'], array(
    '127.0.0.1',
    '::1',
    '82.131.168.149', // Vörös Oroszlán - 2012 április 13.
    '94.21.19.129',   // Otthon         - 2012 április 13.
    '89.133.219.66',  // Brokernet      - 2012 április 17.
))) {
    header('HTTP/1.0 403 Forbidden');
    exit('You (' . @$_SERVER['REMOTE_ADDR'] . ') are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
