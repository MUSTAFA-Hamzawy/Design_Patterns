<?php

interface AdvancedMediaPlayer
{
  public function playVLC(String $fileName);
  public function playQQPlayer(String $fileName);
}