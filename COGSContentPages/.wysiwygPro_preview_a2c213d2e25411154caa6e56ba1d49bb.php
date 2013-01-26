<?php
if ($_GET['randomId'] != "wFADhijemDKL8QyRfrM5sACCwaSrFdDTSD1dIC3ZJmrBklN0keECE1hDoZKmqKBM") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
