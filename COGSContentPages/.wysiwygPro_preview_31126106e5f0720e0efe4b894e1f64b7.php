<?php
if ($_GET['randomId'] != "BRopXVhLMoauKgVOHzu17FXsK5o8vvzyF9nREn4jzaojRywbK8ULphxyFO3FsuKQ") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
