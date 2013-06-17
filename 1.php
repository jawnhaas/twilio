<?php

 if($_REQUEST['Digits'] != '1' and $_REQUEST['Digits'] != '2' and $_REQUEST['Digits'] != '3' and $_REQUEST['Digits'] != '4') {
       header("Location: test.php");
        die;
    }

    // the user pressed 1, connect the call to 310-555-1212 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<?php if ($_REQUEST['Digits'] == '1') { ?>
    <Response>
        <Play>http://fauxlr.com/1D.mp3</Play>
    </Response>
<?php } elseif ($_REQUEST['Digits'] == '2') { ?>
  <Response>
      <Play>http://fauxlr.com/kissu.mp3</Play>
  </Response>
<?php } elseif ($_REQUEST['Digits'] == '3') { ?>
 <Response>
      <Play>http://fauxlr.com/upallnight.mp3</Play>
  </Response>
<?php } elseif ($_REQUEST['Digits'] == '4') { ?>
<Response>
     <Play>http://fauxlr.com/littlethings.mp3</Play>
 </Response>
<?php } ?>
