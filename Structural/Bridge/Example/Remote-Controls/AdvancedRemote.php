<?php


namespace DesignPatterns;


class AdvancedRemote extends Remote
{

  // Extra feature
  public function mute(){
    $this->device->setVolume(0);
  }

  public function channelUP(){
    $this->device->setChannel($this->device->getChannel() + 1);
  }

  public function channelDown(){
    $this->device->setChannel($this->device->getChannel() - 1); // if the current channel is the first, then round
  }
}