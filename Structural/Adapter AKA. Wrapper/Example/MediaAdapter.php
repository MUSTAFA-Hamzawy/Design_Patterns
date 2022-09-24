<?php

class MediaAdapter implements MediaPlayer
{
  public AdvancedMediaPlayer $advancedMediaPlayer;

  /**
   * @param AdvancedMediaPlayer $advancedMediaPlayer
   */
  public function __construct(String $audioType)
  {
    if ($audioType == 'VLC')
      $this->advancedMediaPlayer = new VLCPlayer();
    elseif($audioType == 'QQPlayer')
      $this->advancedMediaPlayer = new QQPlayer();
  }


  public function play(string $audioType, string $fileName): bool
  {
    if ($audioType == 'vlc')
      $this->advancedMediaPlayer.playVLC($fileName);
    elseif($audioType == 'qqplayer')
      $this->advancedMediaPlayer.playQQPlayer($fileName);
  }
}