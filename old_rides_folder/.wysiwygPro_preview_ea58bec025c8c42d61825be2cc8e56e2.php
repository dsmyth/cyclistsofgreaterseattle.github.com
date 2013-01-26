<?php
if ($_GET['randomId'] != "pFvP_9Z7xX5JZ3fwVBThpzVrsqgzt7KrQy0rypDey8Dl59xYYdCgCYOl53td2UfR") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
