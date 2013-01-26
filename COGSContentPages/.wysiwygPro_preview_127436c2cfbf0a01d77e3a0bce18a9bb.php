<?php
if ($_GET['randomId'] != "u8ZxYDfGNTm9no4OP77ecBd1P4y6yNnb9urTG44LDg2Fi6hAqlG3fbHNOuY29zuh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
