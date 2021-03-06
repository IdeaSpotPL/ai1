<?php
require_once __DIR__ . '/../../common-autoload.php';

$christmasLights = new ChristmasLights();
$livingRoomLights = new LivingRoomLights();
$gingerAromatizer = new GingerAromatizer();
$radio = new Radio();

// Christmas mode on:
// turn Christmas tree lights on and main lights off;
// get some ginger aroma and play Last Christmas on the radio
$christmasLights->on();
$livingRoomLights->off();
$gingerAromatizer->on();
$radio->playLastChristmas();

// and then change Last Christmas to Driving Home for Christmas
sleep(2);
$radio->playDrivingHomeForChristmas();

// and then end Christmas mode
sleep(2);
$christmasLights->off();
$livingRoomLights->on();
$gingerAromatizer->off();
$radio->stopMusic();
