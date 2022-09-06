<?php

use DesignPatterns\Remote;
use DesignPatterns\AdvancedRemote;

require 'Device\DeviceInterface.php';
require 'Remote-Controls\Remote.php';


$normalRemoteForRadio = new Remote(new Radio());
$normalRemoteForRadio->togglePower();
$normalRemoteForRadio->volumeDown();
$advancedRemoteForTv = new AdvancedRemote(new TV());
$advancedRemoteForTv->togglePower();
$advancedRemoteForTv->mute();


