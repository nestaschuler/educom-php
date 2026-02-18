<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";
echo date('l, F j, Y');
?>
&copy; 2010-<?php echo date("Y");?>

<br><br>
<?php
date_default_timezone_set("America/New_York");
echo "The current date and time in America is " . date("Y-m-d H:i:s");
?>

<br><br>
<?php
echo date_default_timezone_get();
?>

<br><br>
<?php
// Set the default timezone to use
date_default_timezone_set("UTC");

$d = mktime(0, 0, 0, 10, 3, 1975);
echo "October 3, 1975 was on a " . date("l", $d);
?>

<br><br>
<?php
echo "Now: " . time();
?>
<br><br>
<?php
$d = strtotime("10:30pm November 15 2025");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("now");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+5 days");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("+2 weeks 4 days 2 hours 20 seconds");
echo "Date is " . date("Y-m-d H:i:s", $d) . "<br>";

$d = strtotime("last Sunday");
echo "Date is " . date("Y-m-d H:i:s", $d);
?>
<br><br>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);}
?>