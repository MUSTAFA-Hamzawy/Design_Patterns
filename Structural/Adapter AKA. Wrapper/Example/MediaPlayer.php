<?php

interface MediaPlayer
{
  public function play(String $audioType, String $fileName): bool;
}