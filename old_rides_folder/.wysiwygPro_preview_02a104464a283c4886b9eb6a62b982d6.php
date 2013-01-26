<?php
if ($_GET['randomId'] != "LTuQYP1YmWEjR7mXtQACSKBVD5kKMUQoB_HNzgPLiDBXK6nKzrImNadLzT5keiUu") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
