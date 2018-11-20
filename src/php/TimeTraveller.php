<?php
class TimeTraveller extends DateTime {
  public function __construct($timezone = 'UTC') {
    parent::__construct("now", new DateTimeZone($timezone));
  }

  public static function now($timezone = 'UTC') {
    return new TimeTraveller($timezone);
  }

  public static function parse($format, $date) {
    $dateObj = parent::createFromFormat($format, $date);
    $newDate = new TimeTraveller();
    $newDate->setTimestamp($dateObj->format('U'));
    return $newDate;
  }

  public function __get($name) {
    return $this->get($name);
  }

  protected function get($name) {
    if($name === 'year') {
      return (int) $this->format('Y');
    }
  }
}

var_dump(new TimeTraveller());
echo "<br>";
var_dump(TimeTraveller::now());

echo "<br>";
var_dump(new TimeTraveller("Europe/Rome"));
echo "<br>";
var_dump(TimeTraveller::now("Europe/Rome"));

echo "<br>";
var_dump(TimeTraveller::parse("d/m/Y H:i:s", "19/10/2016 14:48:21"));
