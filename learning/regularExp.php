<?php
preg_match("@^(?:http://)?([^/]+)@i",
    "http://www.php.net/index.html", $matches);
$host = $matches[1];

preg_match('/[^.]+\.[^.]+$/', $host, $matches);

echo "{$matches[0]}\n";
