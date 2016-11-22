<?php
if($_REQUEST['Digits'] == '2') {
header("Location: delivery.xml");
die;
}
if($_REQUEST['Digits'] == '3') {
header("Location: dylan.xml");
die;
}
if($_REQUEST['Digits'] == '5555') {
header("Location: secret-dylan.xml");
die;
}
if($_REQUEST['Digits'] == '5555') {
header("Location: secret-ricky.xml");
die;
}
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>


<Response>
<Say>I’m sorry, but the person you attempted to reach is unavailable.  Please try again later.</Say>
</Response>