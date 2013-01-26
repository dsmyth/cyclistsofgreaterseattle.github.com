<?php
if ($_GET['randomId'] != "1GQeQa5UNN_aOQLYFmepNTxKBa1FxtHElllvpkXNbSlosDL_2l7qQe4izcxZRqrl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
