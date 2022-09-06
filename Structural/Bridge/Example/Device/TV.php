<?php

use DesignPatterns\DeviceInterface;
class TV implements DeviceInterface
{
  public int $volume;
  public int $currentChannel;
  public bool $isOpened;

  public function enable()
  {
      echo "Tv is Turned On.";
  }

  public function disable()
  {
    echo "Tv is Turned Off.";

  }

  public function getVolume() : int
  {
     return $this->volume;
  }

  public function setVolume(int $value):void
  {
    $this->volume = $value;
  }

  public function getChannel(): int
  {
    return $this->currentChannel ;
  }

  public function setChannel(int $value): void
  {
    $this->currentChannel = $value;
  }

  public function isOpened():bool{
    return $this->isOpened;
  }


}