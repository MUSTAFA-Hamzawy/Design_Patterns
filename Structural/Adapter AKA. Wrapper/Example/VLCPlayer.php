<?php

class VLCPlayer implements AdvancedMediaPlayer
{

  public function playVLC(string $fileName)
  {
      echo 'playing ' . $fileName . ' on VLC.';
  }

  public function playQQPlayer(string $fileName)
  {
    echo 'nothing';
  }
}