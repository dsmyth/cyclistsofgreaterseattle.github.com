<?php
if ($_GET['randomId'] != "Rl5twHvmc7H0kmN9deRE24zIOs0Ky9O5hR9o8RxBdLOOLtULxSvGquZdbZnTL3Fl") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
