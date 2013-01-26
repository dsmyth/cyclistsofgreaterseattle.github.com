<?php
if ($_GET['randomId'] != "OL55oxc6r22ILM_At7kiVGgUhe9WiNhjZkUlUZJIcIXdaKIv_9mSOeZbVs9lT33k") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
