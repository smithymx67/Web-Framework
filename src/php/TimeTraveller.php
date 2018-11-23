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

  public function getShortYear() {
    return (int) $this->format('y');
  }

  public function getLongYear() {
    return (int) $this->format('Y');
  }

  public function isLeapYear() {
    return (bool) ($this->format('L')) ? true : false;
  }

  public function getMonthNumber() {
    return (int) $this->format('n');
  }

  public function getMonthShortName() {
    return (string) $this->format('M');
  }

  public function getMonthLongName() {
    return (string) $this->format('F');
  }

  public function getDaysInMonth() {
    return (int) $this->format('t');
  }

  public function getDayOfMonth() {
    return (int) $this->format('j');
  }

  public function getDayOfWeek() {
    return (int) $this->format('w');
  }

  public function getWeekShotText() {
    return (string) $this->format('D');
  }

  public function getWeekLongText() {
    return (string) $this->format('l');
  }

  public function getDateSuffix() {
    return (string) $this->format('S');
  }

  public function getDayOfYear() {
    return (int) $this->format('z');
  }

  public function getTimeAmPm($uppercase = false) {
    return (string) ($uppercase) ? $this->format('A') : $this->format('a');
  }

  public function getTime12Hour($leadZeros = false) {
    if($leadZeros) {
      return (string) $this->format('h');
    } else {
      return (int) $this->format('g');
    }
  }

  public function getTime24Hour($leadZeros = false) {
    if($leadZeros) {
      return (string) $this->format('H');
    } else {
      return (int) $this->format('G');
    }
  }

  public function getTimeMinute($leadZeros = false) {
    if($leadZeros) {
      return (string) $this->format('i');
    } else {
      return (int) $this->format('i');
    }
  }

  public function getTimeSecond($leadZeros = false) {
    if($leadZeros) {
      return (string) $this->format('s');
    } else {
      return (int) $this->format('s');
    }
  }

  public function getTimeMillisecond() {
    return (int) $this->format('v');
  }

  public function getTimeMicrosecond() {
    return (int) $this->format('u');
  }

  public function getTimezone() {
    return (string) $this->format('e');
  }

  public function isDaylightSaving() {
    return (bool) $this->format('I');
  }

  public function getGmtDifference($withColon = false) {
    return (string) ($withColon) ? $this->format('P') : $this->format('O');
  }

  public function getTimezoneAbbreviation() {
    return (string) $this->format('T');
  }

  public function getUtcOffsetInSeconds() {
    return (int) $this->format('Z');
  }

  public function getIso8601Date() {
    return (string) $this->format('c');
  }

  public function getRfc2822Date() {
    return (string) $this->format('r');
  }

  public function getSecondsSinceEpoch() {
    return (string) $this->format('U');
  }

  private function addDateTime($amountToAdd = '') {
    $di = new DateInterval($amountToAdd);
    var_dump($di);
    return parent::add($di);
  }

  public function addYears($yearsToAdd = 0) {
    return $this->add('P'.$yearsToAdd.'Y');
  }

  public function addMonths() {}
  public function addDays() {}
  public function addHours() {}
  public function addMinutes() {}
  public function addSeconds() {}
  public function addMilliseconds() {}
  public function addMicroseconds() {}
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
echo "<br>Get Date Examples</br>";
var_dump(TimeTraveller::now()->getShortYear());
echo "<br>";
var_dump(TimeTraveller::now()->getLongYear());
echo "<br>";
var_dump(TimeTraveller::now()->isLeapYear());
echo "<br>";
var_dump(TimeTraveller::now()->getMonthNumber());
echo "<br>";
var_dump(TimeTraveller::now()->getMonthShortName());
echo "<br>";
var_dump(TimeTraveller::now()->getMonthLongName());
echo "<br>";
var_dump(TimeTraveller::now()->getDaysInMonth());
echo "<br>";
var_dump(TimeTraveller::now()->getDayOfMonth());
echo "<br>";
var_dump(TimeTraveller::now()->getDayOfWeek());
echo "<br>";
var_dump(TimeTraveller::now()->getWeekShotText());
echo "<br>";
var_dump(TimeTraveller::now()->getWeekLongText());
echo "<br>";
var_dump(TimeTraveller::now()->getDateSuffix());
echo "<br>";
var_dump(TimeTraveller::now()->getDayOfYear());

echo "<br>";
echo "<br>Get Time Examples</br>";
var_dump(TimeTraveller::now()->getTimeAmPm());
echo "<br>";
var_dump(TimeTraveller::now()->getTimeAmPm(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTime12Hour());
echo "<br>";
var_dump(TimeTraveller::now()->getTime24Hour());
echo "<br>";
var_dump(TimeTraveller::now()->getTime12Hour(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTime24Hour(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTimeMinute());
echo "<br>";
var_dump(TimeTraveller::now()->getTimeSecond());
echo "<br>";
var_dump(TimeTraveller::now()->getTimeMinute(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTimeSecond(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTimeMillisecond());
echo "<br>";
var_dump(TimeTraveller::now()->getTimeMicrosecond());

echo "<br>";
echo "<br>Get Timezone Examples</br>";
var_dump(TimeTraveller::now()->getTimezone());
echo "<br>";
var_dump(TimeTraveller::now()->isDaylightSaving());
echo "<br>";
var_dump(TimeTraveller::now()->getGmtDifference());
echo "<br>";
var_dump(TimeTraveller::now()->getGmtDifference(true));
echo "<br>";
var_dump(TimeTraveller::now()->getTimezoneAbbreviation());
echo "<br>";
var_dump(TimeTraveller::now()->getUtcOffsetInSeconds());
echo "<br>";

echo "<br>";
echo "<br>Get Full Date Examples</br>";
var_dump(TimeTraveller::now()->getIso8601Date());
echo "<br>";
var_dump(TimeTraveller::now()->getRfc2822Date());
echo "<br>";
var_dump(TimeTraveller::now()->getSecondsSinceEpoch());

echo "<br>";
echo "<br>Add Date Time Examples</br>";
var_dump(TimeTraveller::now()->addYears(1));
echo "<br>";
var_dump(TimeTraveller::now()->addMonths());
echo "<br>";
var_dump(TimeTraveller::now()->addDays());
echo "<br>";
var_dump(TimeTraveller::now()->addHours());
echo "<br>";
var_dump(TimeTraveller::now()->addMinutes());
echo "<br>";
var_dump(TimeTraveller::now()->addSeconds());
echo "<br>";
var_dump(TimeTraveller::now()->addMilliseconds());
echo "<br>";
var_dump(TimeTraveller::now()->addMicroseconds());
echo "<br>";
