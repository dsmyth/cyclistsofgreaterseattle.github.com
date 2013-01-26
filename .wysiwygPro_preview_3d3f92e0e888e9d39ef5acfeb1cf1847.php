<?php
if ($_GET['randomId'] != "bDEwTjdxFtmQkKUtht_nYxgfW9SS1kl62fVKvDKCwN6clozAPEe1oSVTVTryaUwr") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
