<?php
$start_t = explode(" ", microtime(true));

usleep(30000);

$end_t = explode(" ", microtime(true));

$laps = $end_t[1] + $end_t[0] - $start_t[1] - $start_t[0];

echo $laps;