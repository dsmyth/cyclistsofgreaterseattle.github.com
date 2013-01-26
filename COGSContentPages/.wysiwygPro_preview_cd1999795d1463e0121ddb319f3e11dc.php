<?php
if ($_GET['randomId'] != "lfS5rGKWnGzxsp2sRRTzgySM6G4UfsJgi3rbc1VQ9QJvlguZ2hdIfIuVLZjkb7A_") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
