<?php
// Define the event details

$nameforthis="Vote Kim Cooks - Judge4Justice.com ";
$event_name = $nameforthis;
$location = "https://www.dallascounty.org/government/comcrt/district1/community-information/2018/2018-02-13-early-voting-locations.php";
$description = $nameforthis;
$event_start_time = "09:00:00";
$event_end_time = "16:59:59";

// Calculate timestamps for start and end dates
$nextYearTimestamp = date("Y-m-d 09:00:00", strtotime('+113 day'));
$nextYearTimestampend = date("Y-m-d 16:59:59", strtotime('+113 day'));


// Set timezone to GMT
date_default_timezone_set('GMT');

// Format timestamps for iCalendar
$starttime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestamp));
$endtime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestampend));


$filename=$event_name;
// Define the alarm details
$reminderSeconds = 900;  // 15 minutes in seconds

// Generate a unique UID for the event
$uid = md5(uniqid(mt_rand(), true)) . "@ktest.org";

// Generate iCalendar file
$icsContent = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:$uid
DTSTAMP:" . gmdate('Ymd\THis\Z') . "
DTSTART:$starttime
DTEND:$endtime
SUMMARY:$event_name
LOCATION:$location
DESCRIPTION:$description
RRULE:FREQ=DAILY;COUNT=9
BEGIN:VALARM
TRIGGER:-PT" . $reminderSeconds . "S
DESCRIPTION:15-Minute Reminder
ACTION:DISPLAY
END:VALARM
END:VEVENT
END:VCALENDAR";

// Set correct content-type header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: inline; filename='.$filename.'.ics');
echo $icsContent;
exit;
?>
