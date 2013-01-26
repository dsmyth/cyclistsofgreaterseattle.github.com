<?php
if ($_GET['randomId'] != "AhHoWRteEj2X3hzzyBQqofK3J9HPdb8bD9bsuF0Bls4QDc7V4_2KjUQrzOkPesZ2") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
