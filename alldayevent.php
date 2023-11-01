<?php

//regular date event example working
// Calculate timestamp for the next year
$nextYearTimestamp = date("Y-m-d 00:00:00", strtotime('+1 day'));
$nextYearTimestampend = date("Y-m-d 23:59:59", strtotime('+9 day'));

$nameforthis="Vote Kim Cooks - Judge4Justice.com ";

date_default_timezone_set('GMT');

$starttime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestamp));
$endtime = gmdate('Ymd\THis\Z', strtotime($nextYearTimestampend));



// Define the alarm details
$alarmTrigger = "PT0S";  // Trigger one day before the event
$alarmDescription = "Daily Reminder: Tomorrow's Event";



$event_name=$nameforthis;
$file_name=$nameforthis."All Day Event".date("m-d",strtotime($starttime));
$location="https://www.dallascounty.org/government/comcrt/district1/community-information/2018/2018-02-13-early-voting-locations.php ";
$description=$event_name;
$trigger="-P1D";
// Generate iCalendar file
$icsContent = "BEGIN:VCALENDAR
VERSION:2.0
BEGIN:VEVENT
UID:" . md5(uniqid(mt_rand(), true)) . "@ktest.org
DTSTAMP:" . gmdate('Ymd').'T'. gmdate('His') . "Z
DTSTART:" .$starttime. "
DTEND:" .$endtime. "
SUMMARY:".$event_name."
LOCATION:".$location."
DESCRIPTION:".$description;


$startDatealaram = new DateTime($starttime);
$endDatealaram = new DateTime($endtime);
$intervalalaram = new DateInterval('P1D'); // 1 day interval
//$alarmTrigger = "PT5M"; 
while ($startDatealaram <= $endDatealaram) {
    $icsContent .= "\nBEGIN:VALARM
TRIGGER:" . $alarmTrigger . "
DESCRIPTION:" . $alarmDescription . "
ACTION:DISPLAY
END:VALARM";

    $startDatealaram->add($intervalalaram);
}

$icsContent .= "\nEND:VEVENT
END:VCALENDAR";




// //set correct content-type-header
 header('Content-type: text/calendar; charset=utf-8');
 header('Content-Disposition: inline; filename='.$file_name.'.ics');
echo $icsContent;
exit;
?>
