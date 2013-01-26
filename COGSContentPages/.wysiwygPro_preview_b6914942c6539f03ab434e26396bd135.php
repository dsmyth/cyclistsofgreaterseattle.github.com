<?php
if ($_GET['randomId'] != "9tIId9v2fVs6Yw0tEF0QNcN1Up_mJ2qwLjf4WjbQIeAt9SMly6rcyAia1NfmN35V") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
