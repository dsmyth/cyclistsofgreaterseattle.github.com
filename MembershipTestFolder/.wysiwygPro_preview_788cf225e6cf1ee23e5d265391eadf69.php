<?php
if ($_GET['randomId'] != "oZPNKGtwYgmdd8RIPpdPm9VmAfHcfjTs6sf752N03BgPUZ7uHbbOrKYYKx1aIJyo") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
