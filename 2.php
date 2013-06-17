<?php
 
    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '2') {
        header("Location: test.php");
        die;
    }
     
    // the user pressed 1, connect the call to 310-555-1212 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial>+12154291152</Dial>
    <Say>The call failed or the remote party hung up. Goodbye.</Say>
</Response>