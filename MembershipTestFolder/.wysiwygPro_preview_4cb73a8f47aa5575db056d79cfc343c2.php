<?php
if ($_GET['randomId'] != "TL4vgBpPT3T07d9dPzS1yZlgXAQVnJclfp94lzcOMCqWubvpZb5ZqyIkW63UZeRb") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
