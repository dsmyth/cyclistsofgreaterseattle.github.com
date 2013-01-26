<?php
if ($_GET['randomId'] != "i0YW1YzjZQZSGD5Duiu2ZTgo3QWND8S_DxLwq40RXDi9tRfG66METyT7f8FbOb9N") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
