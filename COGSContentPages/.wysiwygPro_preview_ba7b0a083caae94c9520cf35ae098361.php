<?php
if ($_GET['randomId'] != "cY8edkBWGDTSY6oMpdJSYwgxrs9C7dJAoipJDP7Rc4yFWWazSt8Vy5q7dltUa6Y0") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
