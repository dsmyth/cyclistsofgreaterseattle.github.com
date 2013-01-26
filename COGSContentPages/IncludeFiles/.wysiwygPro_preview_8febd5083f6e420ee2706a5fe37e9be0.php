<?php
if ($_GET['randomId'] != "MHTyb1mYJav9uan3BK58gPlMe2Lcw5oyc8JLGtseq9onKqCTsARpCrEsG0ZVnb3H") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
