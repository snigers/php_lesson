<?php

class wrFile
{
  public $filename;
  public $somecontent;
  public $fileclose;
  

  public function __construct($filename, $somecontent)
  {
    $this->filename = $filename;
    $this->somecontent = $somecontent;
    if (isset($_POST['imy'])) {
      if (!is_writable($this->filename)) {
          echo "Не могу открыть файл {$this->filename}";
          exit;
      }
      $this->fileclose = fopen($this->filename, 'a');
    } else {
      echo 'Введите имя файла';
    }
  }
  
  public function __destruct()
  {
    fclose($this->fileclose);
  }
  
  public function writeFile() {
    if (isset($_POST['text'])) {
      $somecontent = $this->somecontent . "\n";
      if (fwrite($this->fileclose, $somecontent) === FALSE) {
        echo "Не могу произвести запись в файл {$this->filename}";
        exit;
      }
      echo "Ура! записали в файл {$this->filename}";
      var_dump($this);
    } else {
      echo 'Введите текст';
    }
  }

  function vyvod() {
    echo '<br>';
    $file = file_get_contents($this->filename);
    echo nl2br($file);
  }
}