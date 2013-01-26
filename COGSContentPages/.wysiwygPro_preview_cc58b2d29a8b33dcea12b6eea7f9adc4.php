<?php
if ($_GET['randomId'] != "QoS460wx8XBfAPekGvqsEzMkxXz8sf4pkeyIHmKgZewfIFvBaQsiFq2Lww2gjHXG") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
