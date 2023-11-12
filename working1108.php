<?php 

$location = "https://www.dallascounty.org/government/comcrt/district1/community-information/2018/2018-02-13-early-voting-locations.php";
$reminderSeconds="-PT15M";
$nextYearTimestamp = "2024-02-20 09:00:00";
$nextYearTimestampend = "2024-02-20 16:59:59";
$starttime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestamp));
$endtime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestampend));

$nameforthis="Vote Kim Cooks - Judge4Justice.com ";
$description =$event_name = $nameforthis;

$filename="ALert_file1";
$description = "Judge4Justice.com";

$icsContent = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:unique-event-id
DTSTAMP:" . gmdate('Ymd\THis\Z') . "
DTSTART:$starttime
DTEND:$endtime
SUMMARY:$event_name
LOCATION:$location
DESCRIPTION:$description
RRULE:FREQ=DAILY;COUNT=15
BEGIN:VALARM
TRIGGER:".$reminderSeconds."
ACTION:DISPLAY
END:VALARM
END:VEVENT
END:VCALENDAR";

header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: attachment; filename='.$filename.'.ics');
echo $icsContent;
 