<?php
namespace PurplePallet;

class Logger {
  private $now;
  private $defaultLogFile;

  public $DEFAULT;
  public $ERROR;
  public $WARNING;
  public $INFO;

  function __construct() {
    $this->now = (new \DateTime())->format('Y-m-d');
    $this->defaultLogFile = "log_".$this->now.".log";

    $this->DEFAULT = "DEFAULT";
    $this->ERROR = "ERROR";
    $this->WARNING = "WARNING";
    $this->INFO = "INFO";
  }

  public function log($logLocation, $logCategory, $logMsg) {
    $msg = (new \DateTime())->format('Y-m-d H:i:s.u').' '.$logCategory.' '.$logMsg."\r\n";
    file_put_contents($logLocation.$this->defaultLogFile, $msg, FILE_APPEND | LOCK_EX);
  }
}