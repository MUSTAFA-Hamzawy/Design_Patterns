<?php

namespace DesignPatterns;

class Remote      // normal remote, we can make it abstract but anyway
{
  protected DeviceInterface $device;
  public function __construct(DeviceInterface $device){
    $this->device = $device;
  }

  public function togglePower(): string{
    if ($this->device->isOpened())
      return 'close';
    else return 'open';
  }

  public function volumeUP(){
    $this->device->setVolume($this->device->getVolume() + 10);
  }

  public function volumeDown(){
    $this->device->setVolume($this->device->getVolume() - 10);
  }


}