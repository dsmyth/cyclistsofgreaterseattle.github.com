<?php
if ($_GET['randomId'] != "3WGKwfw7ijCCobfqe9lpSX6CNacLQXQE8zhM4AzHt962YX333C5xFqBf1XA3PZrE") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
