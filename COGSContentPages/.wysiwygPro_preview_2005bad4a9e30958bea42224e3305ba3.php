<?php
if ($_GET['randomId'] != "xOlySxftKz7ORCV63FVnBjzI8cp8_WPORw2gMwEUxgcauyOXJsOeoNMUKIpG3ILV") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
