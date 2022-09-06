<?php


use DesignPatterns\DeviceInterface;

class Radio implements DeviceInterface
{

  public int $volume;
  public int $currentChannel;
  public bool $isOpened;

  public function enable()
  {
    echo "Radio is Turned On.";
  }

  public function disable()
  {
    echo "Radio is Turned Off.";

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