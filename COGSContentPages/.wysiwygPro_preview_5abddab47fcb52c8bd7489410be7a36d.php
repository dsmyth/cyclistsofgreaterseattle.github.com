<?php
if ($_GET['randomId'] != "D8npynns_yqYMeO6Y6D9NYjD7iVOC0J7LBDpDZosjFVTXI7c_6gmrtvNBSGeM4ys") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
