<?php
if ($_GET['randomId'] != "taGacK6oSxhQz6XHRPanlAfZ6E7mHnBHWQVliW6dqJZL00b4GfIBgpt4quQptlzX") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
