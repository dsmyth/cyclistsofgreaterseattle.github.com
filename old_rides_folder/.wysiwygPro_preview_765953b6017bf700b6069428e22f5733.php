<?php
if ($_GET['randomId'] != "DmxZmr1H9hQrC75lq427nJwIdaSELkMEZGW1aOE8xoQeD2TYwCXYGJWeXNmTeTZg") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
