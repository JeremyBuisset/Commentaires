<?php
date_default_timezone_set('Europe/Paris');
$date = time();

echo $date."<br>";
echo date('d/m/Y H:i:s', $date);