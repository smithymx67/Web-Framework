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
    return TimeTraveller::now()->setTimestamp($dateObj->format('U'));
  }

  public function format($format = 'Y/m/d H:m:i') {
    return parent::format($format);
  }

  public function diffInYears($date = null, $absolute = true) {
    return (int) parent::diff($date, $absolute)->format('%y');
  }

  public function diffInMonths($date = null, $absolute = true) {
    return (int) $this->diffInYears($date, $absolute) * 12 + parent::diff($date, $absolute)->format('%m');
  }

  public function diffInDays($date = null, $absolute = true) {
    return (int) parent::diff($date, $absolute)->format('%a');
  }

  public function diffInWeeks($date = null, $absolute = true) {
    return (int) floor($this->diffInDays($date, $absolute) / 7);
  }

  public function diffInSeconds($date = null, $absolute = true) {
    $diff = parent::diff($date, $absolute);
    $value = ((($diff->days * 24) + $diff->h) * 60 + $diff-> i) * 60 + $diff->s;
    return ($absolute || !$diff->invert) ? $value : -$value;
  }

  public function diffInMinutes($date = null, $absolute = true) {
    return (int) floor($this->diffInSeconds($date, $absolute) / 60);
  }

  public function diffInHours($date = null, $absolute = true) {
    return (int) floor($this->diffInSeconds($date, $absolute) / 60 / 60);
  }

  public function diffInMicroseconds($date = null, $absolute = true) {
    $diff = parent::diff($date, $absolute);
    $value = floor((((($diff->days * 24) + $diff->h) * 60 + $diff-> i) * 60 + ($diff->f + $diff->s)) * 1000000);
    return ($absolute || !$diff->invert) ? $value : -$value;
  }

  public function diffInMilliseconds($date = null, $absolute = true) {
    return ($this->diffInMicroseconds($date, $absolute) / 1000);
  }
}

echo "Default Example<br>";
var_dump(new TimeTraveller());
echo "<br>";
var_dump(TimeTraveller::now());

echo "<br>";
echo "<br>Timezone Example<br>";
var_dump(new TimeTraveller("Europe/Rome"));
echo "<br>";
var_dump(TimeTraveller::now("Europe/Rome"));

echo "<br>";
echo "<br>Parse Example</br>";
var_dump(TimeTraveller::parse("d/m/Y H:i:s", "19/10/2016 14:48:21"));

echo "<br>";
echo "<br>Format Example</br>";
var_dump(TimeTraveller::now()->format());

echo "<br>";
echo "<br>Difference Example</br>";
$d1 = TimeTraveller::parse("d/m/Y H:i:s", "1/12/2018 00:00:00");
$d2 = TimeTraveller::parse("d/m/Y H:i:s", "34/12/2018 00:00:30");
var_dump($d1->diffInYears($d2));
echo "<br>";
var_dump($d1->diffInMonths($d2));
echo "<br>";
var_dump($d1->diffInDays($d2));
echo "<br>";
var_dump($d1->diffInWeeks($d2));
echo "<br>";
var_dump($d1->diffInSeconds($d2));
echo "<br>";
var_dump($d1->diffInMinutes($d2));
echo "<br>";
var_dump($d1->diffInHours($d2));
echo "<br>";
var_dump($d1->diffInMicroseconds($d2));
echo "<br>";
var_dump($d1->diffInMilliseconds($d2));
echo "<br>";
