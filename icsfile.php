<?php 

$filename=date("ymdhis");
$icsContent = "BEGIN:VCALENDAR
VERSION:2.0
PRODID:-//Your Organization//Your Application//EN
BEGIN:VEVENT
UID:1234567890
DTSTAMP:20231102T120000Z
DTSTART:20231102T130000Z
DTEND:20231102T140000Z
SUMMARY:Your Event
DESCRIPTION:new description
LOCATION:Event Location
ATTENDEE:mailto:example@email.com
ORGANIZER:mailto:organizer@email.com
ATTACH;FILENAME=https://images.ctfassets.net/hrltx12pl8hq/3Z1N8LpxtXNQhBD5EnIg8X/975e2497dc598bb64fde390592ae1133/spring-images-min.jpg
END:VEVENT
END:VCALENDAR";


// Set correct content-type header
header('Content-type: text/calendar; charset=utf-8');
header('Content-Disposition: inline; filename='.$filename.'.ics');
echo $icsContent;
exit;
