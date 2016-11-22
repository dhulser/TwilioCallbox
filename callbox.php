<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
<Gather action="/callbox/doorbell_gather.php" method="POST">
    <Say voice="woman">If you are have an entry code, dial it now.</Say>    
    <Say voice="woman">If you are here with a delivery, press 2.</Say>
    <Say voice="woman">For Dylan, press 3.</Say>
</Gather>
</Response>