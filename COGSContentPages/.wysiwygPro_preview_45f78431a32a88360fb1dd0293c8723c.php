<?php
if ($_GET['randomId'] != "9MONEp89JbVAVVVe1K0csbsfCcnwQQyjhPR9LkfmTdNAwh9glbzAHVcTjQgo2cBE") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
