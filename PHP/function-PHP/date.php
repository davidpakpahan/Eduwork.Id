<?php
echo date("l, d-M-Y");

print "<br>";

echo time();

print "<br>";

echo date("l", time() + 60 * 60 * 24 * 4);

print "<br>";

echo date("l", mktime(0, 0, 0, 8, 16, 1994));
