<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "7cd45c115f7c48fa7dec", // Replace with 'key' from dashboard
    "cb6a774e3cc7964bfa80", // Replace with 'secret' from dashboard
    "1760135", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'eu' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
for ($i = 0; $i < 10 ; $i++) {
    $pusher->trigger('linea', 'new-linea', array(
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000),
        rand(0, 5000)
    ));
     time_nanosleep(1);

}
