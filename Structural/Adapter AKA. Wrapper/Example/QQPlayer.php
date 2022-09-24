<?php

class QQPlayer implements AdvancedMediaPlayer
{

  public function playVLC(string $fileName)
  {
    echo 'nothing';
  }

  public function playQQPlayer(string $fileName)
  {
    echo 'playing ' . $fileName . ' on QQPlayer.';
  }
}