<?php
// Calculate timestamp for the next year
$nextYearTimestamp = date("Y-m-d 00:00:00", strtotime('+1 day'));
$nextYearTimestampend = date("Y-m-d 23:59:59", strtotime('+8 day'));

date_default_timezone_set('GMT');

$nameforthis="Weekly Test event ";
$starttime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestamp));
$endtime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestampend));

$event_name=$nameforthis;
$file_name=$nameforthis.date("m-d",strtotime($starttime));
$location="https://www.dallascounty.org/government/comcrt/district1/community-information/2018/2018-02-13-early-voting-locations.php";
$description="https://t3.ftcdn.net/jpg/05/07/59/48/360_F_507594878_mXzpK9ncaUIgFGJuQoqjAMZNUoGoxhhX.jpg";
$trigger="-PT2M";
// Generate iCalendar file
$ical = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:" . md5(uniqid(mt_rand(), true)) . "@ktest.org
DTSTAMP:" . gmdate('Ymd').'T'. gmdate('His') . "Z
DTSTART:" .$starttime. "
DTEND:" .$endtime. "
SUMMARY:".$event_name."
LOCATION:".$location."

DESCRIPTION:".$description."
BEGIN:VALARM
TRIGGER:".$trigger."
DESCRIPTION:".$description."
ACTION:DISPLAY
END:VALARM
END:VEVENT
END:VCALENDAR";



// //set correct content-type-header
 header('Content-type: text/calendar; charset=utf-8');
 header('Content-Disposition: inline; filename='.$file_name.'.ics');
echo $ical;
exit;
?>
