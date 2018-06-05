<?php

$page = file_get_contents('https://vpnbook.com');

preg_match_all('/<strong>Password:(.*)<\/strong>/', $page, $matches);

print_r($matches[1][0]);

?>