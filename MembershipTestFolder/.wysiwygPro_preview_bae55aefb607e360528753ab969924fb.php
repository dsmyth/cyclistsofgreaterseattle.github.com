<?php
if ($_GET['randomId'] != "mDzyQIXgOeC7nlVSVzZKmTcn1NQzv9IlpGZhB3HITP8RwQiZS3VrXu53407MKSZq") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
