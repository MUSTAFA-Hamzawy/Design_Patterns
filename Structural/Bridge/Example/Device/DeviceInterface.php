<?php

namespace DesignPatterns;
use DesignPatterns\Remote;
interface DeviceInterface
{

  public function enable();
  public function disable();
  public function getVolume();
  public function setVolume(int $value): void;
  public function getChannel();
  public function setChannel(int $value): void;
  public function isOpened():bool;

}